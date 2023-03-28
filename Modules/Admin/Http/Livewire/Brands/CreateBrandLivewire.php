<?php

namespace Modules\Admin\Http\Livewire\Brands;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\Category;
use Illuminate\Support\Facades\Session;
use Modules\Admin\Entities\Brand;

class CreateBrandLivewire extends Component
{
    public
        $name,
        $category_id,
        $is_active = true,
        $categories;


    protected $rules = [
        'name' => 'required',
        'category_id' => 'required',
        'is_active' => 'boolean|sometimes'
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }
    public function render()
    {
        return view('admin::livewire.brands.create-brand-livewire');
    }
    function save()
    {
        Brand::create($this->validate());
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('success', 'brand created successfully');
        return to_route('admin.brands.index');
    }
}
