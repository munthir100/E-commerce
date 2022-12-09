<?php

namespace Modules\Client\Http\Livewire;

use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartCounter extends Component
{
    protected $listeners = ['cart_updated' => 'render'];
    public function render()
    {
        $cartCount = Cart::content()->count();
        return view('client::livewire.cart-counter', compact('cartCount'));
    }
}
