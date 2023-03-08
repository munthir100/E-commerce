<?php

namespace Modules\Admin\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\TaxNumber;

class UpdateTaxLivewire extends Component
{
    public $taxNumber,$number;
    protected $rules;

    public function mount()
    {
        $this->number = $this->taxNumber->number;
    }

    public function render()
    {
        return view('admin::livewire.update-tax-livewire');
    }






    public function save()
    {

        $this->rules = [
            'number' => 'required|unique:tax_numbers,number,' . Auth::user()->admin->store->id,
        ];
       
        $this->taxNumber->update($this->validate());

        session()->flash('success', 'Tax number updated successfully.');

        return to_route('admin.settings.taxNumber.index');
    }
}
