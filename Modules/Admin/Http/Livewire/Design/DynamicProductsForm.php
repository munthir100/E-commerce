<?php

namespace Modules\Admin\Http\Livewire\Design;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;

class DynamicProductsForm extends Component
{
    public $selectedType;
    public $selectedItem;

    public function render()
    {
        $options = [];


        if ($this->selectedType == 'category') {
            $options = Category::forAdmin(Auth::id())->get()->pluck('title', 'id');
        } elseif ($this->selectedType == 'most_sales') {
        }

        return view('admin::livewire.design.dynamic-products-form', [
            'options' => $options,
        ]);
    }
}
