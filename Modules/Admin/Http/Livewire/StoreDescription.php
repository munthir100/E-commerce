<?php

namespace Modules\Admin\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\Store;

class StoreDescription extends Component
{
    public $store_desc, $userId,$city_id;

    protected $rules = [
        'store_desc' => 'required|string|max:255',
    ];

    public function mount()
    {
        $this->userId = Auth::id();

        $store = Store::whereHas('admin.user', function ($query) {
            $query->where('user_id', $this->userId);
        })->first();

        $this->store_desc = $store->store_desc;
        $this->city_id = Auth::user()->admin->store->city->name;
    }

    public function render()
    {
        return view('admin::livewire.store-description');
    }

    public function save()
    {
        $this->validate();

        $store = Store::whereHas('admin.user', function ($query) {
            $query->where('user_id', $this->userId);
        })->first();

        $store->update([
            'store_desc' => $this->store_desc,
        ]);

        session()->flash('success', 'Store description updated successfully.');
        return redirect()->route('admin.settings.store');
    }
}
