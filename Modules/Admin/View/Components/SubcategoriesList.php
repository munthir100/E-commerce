<?php

namespace Modules\Admin\View\Components;

use Illuminate\View\Component;

class SubcategoriesList extends Component
{
    
    public $subcategories;

    public function __construct($subcategories)
    {
        $this->subcategories = $subcategories;
    }


    public function render()
    {
        return view('admin::components.subcategorieslist');
    }
}
