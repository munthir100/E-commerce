<?php

namespace Modules\Admin\Http\Livewire\Categories;

use Livewire\Component;
use Modules\Admin\Entities\Category;

class CategoryForm extends Component
{
    public $title, $parent_id;

    protected $rules = [
        'title' => 'required',
        // 'parent_id' => 'integer',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('admin::livewire.categories.category-form');
    }

    function store()
    {
        $data = $this->validate();
        Category::create(array_merge($data,['store_id' => 1]));
        $this->dispatchBrowserEvent('closeModal');
    }
}
