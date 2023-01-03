<?php

namespace Modules\Store\Http\Livewire\Wishlist;

use Livewire\Component;

class WishlistCounter extends Component
{
    protected $listeners = [
        'added-to-wishlist' => 'render',
        'removed-from-wishlist' => 'render',
    ];
    public function render()
    {
        $wishlist = session()->get('wishlist', []);
        $wishlistCount = count($wishlist);
        return view('store::livewire.wishlist.wishlist-counter', compact('wishlistCount'));
    }
}
