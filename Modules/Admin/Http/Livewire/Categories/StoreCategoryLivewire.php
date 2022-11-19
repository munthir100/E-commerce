<?php

namespace Modules\Admin\Http\Livewire\Categories;

use Livewire\Component;
use Modules\Admin\Entities\Category;

class StoreCategoryLivewire extends Component
{
    public $title, $parent_id, $is_active, $store_id;


    protected $rules = [
        'title' => 'required',
        'parent_id' => 'sometimes',
        'is_active' => 'sometimes'
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }

    public function render()
    {
        return view('admin::livewire.categories.store-category-livewire');
    }

    public function save()
    {
        $data = $this->validate();
        $data['store_id'] = $this->store->id;
        Category::create($data);
        return redirect()->back();
    }
}
