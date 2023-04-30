<?php

namespace Modules\Client\Http\Livewire;

use Livewire\Component;
use Modules\Client\Entities\Location;

class DeleteClientShippingAddress extends Component
{
    public $location;
    public $store;
    protected $listeners = ['deletelocationConfirmed' => 'delete'];

    public function render()
    {
        return view('client::livewire.delete-client-shipping-address');
    }

    public function confirmDelete()
    {
        $this->dispatchBrowserEvent('confirmDelete', [
            'message' => __('?Are you sure'),
            'id' => $this->location->id,
            'callback' => 'deletelocationConfirmed',
        ]);
    }
    function delete($id)
    {
        Location::where('id', $id)->delete();
        
        return redirect()->route('client.shipping.index', $this->store->store_link)->with('success', __('Location Deleted'));
    }
}
