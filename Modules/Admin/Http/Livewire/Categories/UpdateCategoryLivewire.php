<?php

namespace Modules\Admin\Http\Livewire\Categories;

use Livewire\Component;

class UpdateCategoryLivewire extends Component
{
    public $category, $categories, $parent_id, $title, $is_active;

    function mount()
    {
        $this->title = $this->category->title;
        $this->parent_id = $this->category->parent_id;
        $this->is_active = $this->category->is_active;
    }
    protected $rules = [
        'title' => 'required',
        'parent_id' => 'sometimes',
        'is_active' => 'sometimes|boolean',
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }

    public function render()
    {
        return view('admin::livewire.categories.update-category-livewire');
    }

    public function save()
    {
        $this->category->fill($this->validate());
        if ($this->category->parent_id == '') {
            $this->category->parent_id = null;
        }
        $this->category->save();
        session()->flash('success', 'category edited successfully');
        return to_route('admin.categories.index');
    }
}
