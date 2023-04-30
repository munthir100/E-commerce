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
    public $phone;
    public $address;
    public $longitude, $latitude, $locations;
    public $client;

    public $address_type;

    public $location_id;


    protected $listeners = ['markerDragged' => 'markerDragged'];

    protected $rules = [
        'name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'address_type' => 'required',
    ];
    function mount()
    {
        $this->user = Auth::user();
        if (!$this->user) {
            return;
        }
        abort_if(!auth()->user()->hasRole('client'), 401, 'the admins can not place orders');
        $this->name = $this->user->name;
        $this->phone = $this->user->phone;
        $this->locations = $this->user->client->locations;
        $this->client = $this->user->client;
    }

    public function render()
    {
        return view('client::livewire.add-client-location');
    }

    public function selectOldLocation()
    {
        $this->validate([
            'location_id' => 'required|exists:locations,id',
        ]);

        $order = $this->client->orders()->create([
            'store_id' => $this->store->id,
            'client_id' => $this->client->id,
            'shipping' => 'N/A',
            'price' => Cart::total(),
            'status' => 'new',
            'location_id' => $this->location_id,
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

        $this->client->update(['number_of_orders' => $this->client->number_of_orders + 1]);
        Cart::destroy();
        return redirect()->route('store.index', $this->store->store_link)->with('success', 'order created');
    }

    public function save()
    {
        if (!$this->latitude || !$this->longitude) {
            $this->dispatchBrowserEvent('addWarning', ['message' => __('Drag the location on map first')]);
            return;
        }
        $this->validate();
        $location = $this->client->locations()->create([
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'address' => $this->address,
            'phone' => $this->phone,
            'address_type' => $this->address_type,
        ]);

        $order = $this->client->orders()->create([
            'store_id' => $this->store->id,
            'client_id' => $this->client->id,
            'shipping' => 'N/A',
            'price' => Cart::total(),
            'status' => 'new',
            'location_id' => $location->id,
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

        $this->client->update(['number_of_orders' => $this->client->number_of_orders + 1]);
        Cart::destroy();
        return redirect()->route('store.index', $this->store->store_link)->with('success', __('Location Created'));
    }

    public function markerDragged($data)
    {
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }
}
