<?php

namespace Modules\Store\Http\Livewire\Cart;

use Livewire\Component;
use Modules\Admin\Entities\Product;
use Gloudemans\Shoppingcart\Facades\Cart;

class AddToCart extends Component
{
    public $product, $source;
    public function render()
    {
        return view('store::livewire.cart.add-to-cart');
    }
    public function addToCart()
    {
        Cart::add(
            $this->product->id,
            $this->product->title,
            1,
            $this->product->price,
        );
        $this->emit('cart_updated');
    }
}
