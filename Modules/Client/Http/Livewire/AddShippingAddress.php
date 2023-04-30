<?php

namespace Modules\Client\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Modules\Client\Entities\Location;

class AddShippingAddress extends Component
{
    public $store;
    public $user;
    public $name;
    public $phone;
    public $address;
    public $longitude, $latitude;
    public $client;
    public $address_type;

    protected $listeners = ['markerDragged' => 'markerDragged'];

    public function render()
    {
        return view('client::livewire.add-shipping-address');
    }

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
            abort(401);
        }
        $this->client = $this->user->client;
    }

    public function save()
    {
        if (!$this->latitude || !$this->longitude) {
            $this->dispatchBrowserEvent('addWarning', ['message' => __('Drag the location on map first')]);
            return;
        }
        $this->validate();
        Location::create([
            'longitude' => $this->longitude,
            'latitude' => $this->latitude,
            'address' => $this->address,
            'phone' => $this->phone,
            'address_type' => $this->address_type,
            'client_id' => $this->client->id,
        ]);


        return redirect()->route('client.shipping.index', $this->store->store_link)->with('success', __('Location Created'));
    }

    public function markerDragged($data)
    {
        $this->latitude = $data['latitude'];
        $this->longitude = $data['longitude'];
    }
}
