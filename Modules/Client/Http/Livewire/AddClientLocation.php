<?php

namespace Modules\Client\Http\Livewire;

use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;

class AddClientLocation extends Component
{
    public $user;
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
        $this->user = Auth::user();

        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->phone = $this->user->phone;
    }

    public function render()
    {
        return view('client::livewire.add-client-location');
    }

    public function save()
    {
        if (!$this->user) {
            $this->dispatchBrowserEvent('addWarning', [
                'message' => __('please login first'),
            ]);
            return;
        }
        if (!$this->user->hasRole('client')) {
            $this->dispatchBrowserEvent('addWarning', [
                'message' => __('the admins can not place the orders'),
            ]);
            return;
        }

        $this->validate();

        $client = $this->user->client;


        $order = $client->orders()->create([
            'store_id' => $this->store->id,
            'client_id' => $client->id,
            'shipping' => 'N/A',
            'price' => Cart::total(),
            'status' => 'new',
        ]);
        $client->locations()->create([
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
