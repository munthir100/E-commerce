<?php

namespace Modules\Admin\Http\Livewire\Categories;

use Livewire\Component;
use Modules\Admin\Entities\Category;

class DeleteCategoryLivewire extends Component
{
    public $category;
    protected $listeners = ['deleteCategoryConfirmed' => 'delete'];

    public function render()
    {
        return view('admin::livewire.Categories.delete-category-livewire');
    }


    public function confirmDelete()
    {
        if (count($this->category->children) > 0) {
            $this->dispatchBrowserEvent('addWarning', [
                'message' => __('You must delete the subcategories first'),
            ]);
            return;
        } elseif (count($this->category->products) > 0) {
            $this->dispatchBrowserEvent('addWarning', [
                'message' => __('Please delete products related to this category first'),
            ]);
            return;
        }

        $this->dispatchBrowserEvent('confirmDelete', [
            'message' => __('?Are you sure'),
            'id' => $this->category->id,
            'callback' => 'deleteCategoryConfirmed',
        ]);
    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();

        return redirect()->route('admin.categories.index');
    }
}
