<?php

namespace Modules\Admin\Http\Livewire\Categories;

use Livewire\Component;

class DeleteCategoryLivewire extends Component
{
    public $category;

    public function render()
    {
        return view('admin::livewire.categories.delete-category-livewire');
    }

    function delete()
    {
        if (count($this->category->children) > 0) {
            session()->flash('error', 'please delete child categories first');
        } elseif (count($this->category->products) > 0) {
            session()->flash('error', 'please delete a products related with this category first');
        } else {
            $this->category->delete();
            session()->flash('success', 'Category deleted successfully');
        }
        return to_route('admin.categories.index');
    }
}
