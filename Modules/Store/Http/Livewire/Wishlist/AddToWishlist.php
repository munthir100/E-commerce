<?php

namespace Modules\Store\Http\Livewire\Wishlist;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Modules\Store\Entities\Wishlist;

class AddToWishlist extends Component
{
    use AuthorizesRequests;

    public $product, $user_id, $product_id;

    function mount()
    {

        $this->user_id = Auth::id();
        $this->product_id = $this->product->id;
    }

    public function rules()
    {
        return
            [
                'user_id' => 'required|exists:users,id',
                'product_id' => 'required'
            ];
    }

    public function render()
    {
        return view('store::livewire.wishlist.add-to-wishlist');
    }
    function addToWishlist()
    {
        $checkIfAreadyExist = Wishlist::where('product_id', $this->product_id)->where('user_id', $this->user_id)->first();
        if (!$checkIfAreadyExist) {
            Wishlist::create($this->validate());
            $this->emit('wishlist_updated');
        }
    }
}
