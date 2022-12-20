<?php

namespace Modules\Client\Http\Livewire\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class CountQuantity extends Component
{
    public $qty,$rowId;
    public function render()
    {
        $cart = Cart::content();
       
        return view('client::livewire.cart.count-quantity');
    }
}
