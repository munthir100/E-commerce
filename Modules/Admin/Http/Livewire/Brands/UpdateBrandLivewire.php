<?php

namespace Modules\Admin\Http\Livewire\Brands;

use Livewire\Component;
use Modules\Admin\Entities\Brand;

class UpdateBrandLivewire extends Component
{
    public $categories, $brand, $name, $category_id, $is_active;
    function mount()
    {
        $this->name = $this->brand->name;
        $this->is_active = $this->brand->is_active;
        $this->category_id = $this->brand->category_id;
    }
    protected $rules = [
        'name' => 'required',
        'category_id' => 'sometimes',
        'is_active' => 'sometimes|boolean',
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
        session()->flash('success', 'brand updated successfully');
        return to_route('admin.brands.index');
    }
}
