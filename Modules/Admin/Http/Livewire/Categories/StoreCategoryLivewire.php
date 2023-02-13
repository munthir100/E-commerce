<?php

namespace Modules\Admin\Http\Livewire\Categories;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Modules\Admin\Entities\Category;

use function Symfony\Component\String\b;

class StoreCategoryLivewire extends Component
{
    public $categories, $title, $parent_id, $is_active = true;


    protected $rules = [
        'title' => 'required',
        'parent_id' => 'sometimes',
        'is_active' => 'boolean|sometimes'
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }

    public function render()
    {
        return view('admin::livewire.Categories.store-category-livewire');
    }

    public function save()
    {
        $data = $this->validate();
        $data['store_id'] = Auth::id();
        Category::create($data);
        $this->dispatchBrowserEvent('closeModal');
        session()->flash('success', 'category created successfull');
        return to_route('admin.categories.index');
    }
}
