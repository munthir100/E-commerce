<?php

namespace Modules\Store\Http\Livewire\Wishlist;

use Livewire\Component;

class Wishlist extends Component
{

    public $product, $source;

    public function render()
    {
        return view('store::livewire.wishlist.wishlist');
    }
    public function addToWishlist()
    {
        $wishlist = session()->get('wishlist', []);
        $wishlist[] = $this->product->id;
        session()->put('wishlist', $wishlist);

        $this->emit('added-to-wishlist');
        $this->dispatchBrowserEvent('added_to_wishlist',__("Item Added to wishlist ❤️"));
        
    }
    public function removeFromWishlist()
    {
        $wishlist = session()->get('wishlist', []);
        $index = array_search($this->product->id, $wishlist);
        unset($wishlist[$index]);
        session()->put('wishlist', $wishlist);

        $this->emit('removed-from-wishlist');
        $this->dispatchBrowserEvent('removed_from_wishlist',__("Removed Item 🗑️"));

    }
}
