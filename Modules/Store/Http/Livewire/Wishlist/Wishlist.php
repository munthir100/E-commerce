<?php

namespace Modules\Store\Http\Livewire\Wishlist;

use Livewire\Component;

class Wishlist extends Component
{
    public $product;

    public function render()
    {
        return view('store::livewire.wishlist.wishlist');
    }
}
