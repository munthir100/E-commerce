<?php

namespace Modules\Store\Http\Livewire\Wishlist;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Livewire\Component;

class AddToWishlist extends Component
{
    use AuthorizesRequests;

    public $product;

    public function render()
    {
        return view('store::livewire.wishlist.add-to-wishlist');
    }
    public function addToWishlist()
    {
        $wishlist = session()->get('wishlist', []);
        $wishlist[] = $this->product->id;
        session()->put('wishlist', $wishlist);
        
        $this->emit('wishlist-updated');
    }
}
