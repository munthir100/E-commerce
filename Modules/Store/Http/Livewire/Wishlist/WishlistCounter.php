<?php

namespace Modules\Store\Http\Livewire\Wishlist;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Store\Entities\Wishlist;

class WishlistCounter extends Component
{
    protected $listeners = ['wishlist_updated' => 'render'];
    public function render()
    {
        $wishlistCount = Wishlist::where('user_id', Auth::id())->count();
        return view('store::livewire.wishlist.wishlist-counter', compact('wishlistCount'));
    }
}
