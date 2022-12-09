<?php

namespace Modules\Client\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Modules\Admin\Entities\Product;

class AddToCart extends Component
{
    public $product;
    public function render()
    {
        $cart = Cart::content();
        return view('client::livewire.add-to-cart', compact('cart'));
    }
    public function addToCart($product_id)
    {

        $product = Product::findOrFail($product_id);
        Cart::add(
            $product->id,
            $product->title,
            1,
            $product->price,
        );
        $this->emit('cart_updated');
    }
}
