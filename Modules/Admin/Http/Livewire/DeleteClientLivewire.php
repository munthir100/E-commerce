<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;
use Modules\Client\Entities\Client;

class DeleteClientLivewire extends Component
{
    public $client;
    protected $listeners = ['deleteclientConfirmed' => 'delete'];

    public function render()
    {
        return view('admin::livewire.delete-client-livewire');
    }

    public function confirmDelete()
    {
        if (count($this->client->orders) > 0) {
            $this->dispatchBrowserEvent('addWarning', [
                'message' => 'this client have an orders!.',
            ]);
            return;
        }

        $this->dispatchBrowserEvent('confirmDelete', [
            'message' => 'Are you sure?',
            'id' => $this->client->id,
            'callback' => 'deleteclientConfirmed',
        ]);
    }
    function delete($id)
    {
        Client::where('id', $id)->delete();

        $this->dispatchBrowserEvent('hideRow', $id);
    }
}
