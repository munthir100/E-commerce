<?php

namespace Modules\Admin\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\Store;

class StoreDescription extends Component
{
    public $store, $store_desc, $userId, $city_id;

    protected $rules = [
        'store_desc' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->store_desc = $this->store->store_desc;
        $this->city_id = optional($this->store->city)->name;
    }

    public function render()
    {
        return view('admin::livewire.store-description');
    }

    public function save()
    {
        $this->validate();

        $this->store->update([
            'store_desc' => $this->store_desc,
        ]);

        $this->dispatchBrowserEvent('addSuccess', [
            'message' => 'store description updated',
        ]);
    }
}
