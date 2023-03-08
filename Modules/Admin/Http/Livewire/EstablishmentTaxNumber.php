<?php

namespace Modules\Admin\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\TaxNumber;

class EstablishmentTaxNumber extends Component
{
    public $number, $store_id;


    protected $rules = [
        'number' => 'required|unique:tax_numbers,number',
    ];

    public function render()
    {
        return view('admin::livewire.establishment-tax-number');
    }

    function save()
    {
        $data = $this->validate();
        $data['store_id'] = Auth::user()->admin->store->id;
        TaxNumber::create($data);
        session()->flash('success', 'tax number created successfully');
        return to_route('admin.settings.vat.index');
    }
}
