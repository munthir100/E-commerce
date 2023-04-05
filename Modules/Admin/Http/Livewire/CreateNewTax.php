<?php

namespace Modules\Admin\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\VAT;
use Modules\Shipping\Entities\Country;

class CreateNewTax extends Component
{
    public $countries, $country_id, $vat_value, $tax_number;
    protected $rules = [];

    function mount()
    {
        $this->countries = Country::all();
        $this->tax_number = Auth::user()->admin->store->taxNumber;
    }
    
    public function render()
    {
        return view('admin::livewire.create-new-tax');
    }

    function save()
    {
        $this->rules = [
            'country_id' => 'required|exists:countries,id|unique:vats,country_id,NULL,id,store_id,' . Auth::user()->admin->store->id,
            'vat_value' => 'required|numeric',
        ];
        $data = $this->validate($this->rules, $this->messages);

        if ($this->tax_number->isEmpty()) {
            $this->emit('errorOccurred', 'You must have a tax number.');
            $this->dispatchBrowserEvent('closeModal');
            return;
        }

        $data['store_id'] = Auth::user()->admin->store->id;
        VAT::create($data);
        session()->flash('success', 'VAT created successfully.');
        return to_route('admin.settings.vat.index');
    }
}
