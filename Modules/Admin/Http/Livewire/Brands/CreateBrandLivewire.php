<?php

namespace Modules\Admin\Http\Livewire\Brands;

use Livewire\Component;
use Modules\Admin\Entities\Category;
use Illuminate\Support\Facades\Session;
use Modules\Admin\Entities\Brand;

class CreateBrandLivewire extends Component
{
    public $name, $category_id;
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
        $categories = Category::with('childs')->where('store_id', Session::get('store')->id)->get();
        return view('admin::livewire.brands.create-brand-livewire', compact('categories'));
    }
    function save()
    {
        Brand::create($this->validate());
        return redirect()->route('admin.brands.index');
    }
}
