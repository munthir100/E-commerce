<?php

namespace Modules\Store\Http\Livewire\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class RemoveFromCart extends Component
{
    public $productId;
    public function render()
    {
        return view('store::livewire.cart.remove-from-cart');
    }
    public function removeFromCart()
    {
        $item = Cart::content()->where('id', $this->productId)->first();
        Cart::remove($item->rowId);
        $this->emit('cart_updated');
    }
}
