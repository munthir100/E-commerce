<?php

namespace Modules\Store\Http\Livewire\Wishlist;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Modules\Store\Entities\Wishlist;

class RemoveFromWishlist extends Component
{
    public $product;


    public function render()
    {
        return view('store::livewire.wishlist.remove-from-wishlist');
    }
    function removeFromWishlist()
    {
        Wishlist::where('user_id', Auth::id())->where('product_id', $this->product->id)->delete();
        $this->emit('wishlist_updated');
    }
}
