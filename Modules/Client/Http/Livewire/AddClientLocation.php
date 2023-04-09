<?php

namespace Modules\Client\Http\Livewire;

use Livewire\Component;
use Modules\Client\Entities\Order;
use Modules\Client\Entities\OrderDetail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class AddClientLocation extends Component
{

    public $store;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $longitude, $latitude;

    public $address_type;

    protected $listeners = ['markerDragged' => 'markerDragged'];

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'address' => 'required',
        'address_type' => 'required',
    ];
    function mount()
    {
        $user = Auth::user();
        if (!$user || !$user->hasRole('client')) {
            abort(401);
        }
        $this->name = $user->name;
        $this->email = $user->email;
        $this->phone = $user->phone;
    }

    public function render()
    {
        return view('client::livewire.add-client-location');
    }

    public function save()
    {
        $this->validate();

        $client = Auth::user()->client;


        $order = $client->orders()->create([
            'store_id' => $this->store->id,
            'client_id' => $client->id,
            'shipping' => 'N/A',
            'price' => Cart::total(),
            'status' => 'new',
        ]);
        $location = $client->locations()->create([
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'address' => $this->address,
            'address_type' => $this->address_type,
            'order_id' => $order->id,
        ]);
        $cartItems = Cart::content()->map(function ($item) {
            return [
                'product_id' => $item->id,
                'quantity' => $item->qty,
                'shipping' => 'N/A',
                'payment' => 0, //cash on delivary
            ];
        });

        $order->orderDetails()->createMany($cartItems->toArray());

        $client->update(['number_of_orders' => $client->number_of_orders + 1]);
        Cart::destroy();
        return redirect()->route('store.index', $this->store->store_link)->with('success', 'order created');
    }

    public function markerDragged($data)
    {
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }
}
