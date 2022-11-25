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
        $store_id,
        $user_id;

    public function mount()
    {
        $this->store_id = Session::get('store')->id;
        $this->user_id = Auth::user()->id;
    }
    protected $rules = [
        'name' => 'required',
        'category_id' => 'required',
        'store_id' => 'required',
        'user_id' => 'required',
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }
    public function render()
    {
        $categories = Category::where('user_id', Auth::user()->id)->get();
        return view('admin::livewire.brands.create-brand-livewire', compact('categories'));
    }
    function save()
    {
        Brand::create($this->validate());
        return redirect()->route('admin.brands.index');
    }
}
