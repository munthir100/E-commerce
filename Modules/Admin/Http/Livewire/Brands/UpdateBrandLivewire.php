<?php

namespace Modules\Admin\Http\Livewire\Brands;

use Livewire\Component;
use Modules\Admin\Entities\Brand;

class UpdateBrandLivewire extends Component
{
    public $categories, $brand, $name,$category_id;
    function mount()
    {
        $this->name = $this->brand->name;
    }
    protected $rules = [
        'name' => 'required',
        'category_id' => 'sometimes',
    ];
    public function updated($data)
    {
        $this->validateOnly($data);
    }
    public function render()
    {
        return view('admin::livewire.brands.update-brand-livewire');
    }
    public function save()
    {
        $this->brand->update($this->validate());
        return to_route('admin.brands.index');
    }
}
