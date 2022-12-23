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
        $category_id;


    protected $rules = [
        'name' => 'required',
        'category_id' => 'required',
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }
    public function render()
    {
        $userId = Auth::id();
        $categories = Category::whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
        return view('admin::livewire.brands.create-brand-livewire', compact('categories'));
    }
    function save()
    {
        Brand::create($this->validate());
        return redirect()->route('admin.brands.index');
    }
}
