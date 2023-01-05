<?php

namespace Modules\Store\Http\Livewire\Cart;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;

class UpdateQuantity extends Component
{
    public $productId;
    public $quantity;

    public function render()
    {
        return view('store::livewire.cart.update-quantity');
    }

    public function updateQuantity()
    {
        $this->validate([
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $cartItem = Cart::content()->firstWhere('id', $this->productId);
        Cart::update($cartItem->rowId, ['qty' => $this->quantity]);
        $this->emit('cart_updated');
    }

    public function decrementQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->updateQuantity();
            $this->emit('cart_updated');
        }
    }

    public function incrementQuantity()
    {
        $this->quantity++;
        $this->updateQuantity();
        $this->emit('cart_updated');
    }
}
