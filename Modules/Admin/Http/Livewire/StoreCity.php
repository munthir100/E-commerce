<?php

namespace Modules\Admin\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\Store;
use Modules\Shipping\Entities\City;

class StoreCity extends Component
{
    public $city_id, $cities;

    public function mount()
    {
        $this->cities = City::all();
        $this->city_id = Auth::user()->admin->store->city_id;
    }

    protected function rules()
    {
        return [
            'city_id' => 'required|exists:cities,id',
        ];
    }

    public function render()
    {
        return view('admin::livewire.store-city');
    }

    public function save()
    {
        $this->validate();

        $userId = Auth::id();
        Store::whereHas('admin.user', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->update([
            'city_id' => $this->city_id,
        ]);

        session()->flash('success', 'Store location updated successfully');

        return to_route('admin.settings.store');
    }
}
