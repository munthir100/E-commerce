<?php

namespace Modules\Admin\Http\Livewire\Store;

use Livewire\Component;

class UpdataStoreDataLivewire extends Component
{
    public $store, $store_name, $store_link;
    protected $rules;

    function mount()
    {
        $this->store_name = $this->store->store_name;
        $this->store_link = $this->store->store_link;
    }

    public function render()
    {
        return view('admin::livewire.store.updata-store-data-livewire');
    }

    function save()
    {
        $this->rules = [
            'store_name' => 'required|string|max:255',
            'store_link' => 'required|string|max:255|unique:stores,store_name,' . $this->store->id,
        ];
        $this->store->update($this->validate());
        $this->dispatchBrowserEvent('addSuccess', [
            'message' => 'store data updated',
        ]);
    }
}
