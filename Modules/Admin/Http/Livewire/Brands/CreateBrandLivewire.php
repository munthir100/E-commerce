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
        $userId = Auth::id();
        $this->categories = Category::whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
        return view('admin::livewire.brands.create-brand-livewire');
    }
    function save()
    {
        Brand::create($this->validate());
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('success', 'brand created successfull');
        return to_route('admin.brands.index');
    }
}
