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
        $this->cities = City::where('country_id', Auth::user()->country_id)->get();
        $this->city_id = Auth::user()->admin->store->city_id;
    }

    protected $rules = [
        'city_id' => 'required|exists:cities,id',
    ];

    public function render()
    {
        return view('admin::livewire.store-city');
    }

    public function save()
    {
        $data = $this->validate();
        if ($data['city_id'] === '') {
            $data['city_id'] = null;
        }
        Auth::user()->admin->store->update([
            'city_id' => $data['city_id'],
        ]);


        session()->flash('success', 'Store location updated successfully');

        return to_route('admin.settings.store');
    }
}
