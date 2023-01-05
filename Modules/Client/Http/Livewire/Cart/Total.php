<?php

namespace Modules\Client\Http\Livewire\Cart;

use Gloudemans\Shoppingcart\Facades\Cart;

use Livewire\Component;

class Total extends Component
{
    public $total;
    protected $listeners = ['cart_updated' => 'render'];

    public function render()
    {
        $cart = Cart::content();
        $this->total = $cart->sum(function ($item) {
            return $item->price * $item->qty;
        });
        return view('client::livewire.cart.total');
    }
}
