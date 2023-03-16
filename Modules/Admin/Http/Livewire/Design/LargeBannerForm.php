<?php

namespace Modules\Admin\Http\Livewire\Design;

use Livewire\Component;
use Modules\Admin\Entities\Brand;
use Modules\Admin\Entities\Product;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;

class LargeBannerForm extends Component
{
    public $selectedType;
    public $selectedItem;
    public $externalLink = false;
    public $externalLinkUrl = '';

    public function render()
    {
        $options = [];

        if ($this->externalLink) {
            $options['External Link'] = '';
        } else {
            if ($this->selectedType == 'product_link') {
                $options = Product::where('user_id', Auth::id())->pluck('title', 'id');
            } elseif ($this->selectedType == 'category_link') {
                $options = Category::forAdmin(Auth::id())->get()->pluck('title', 'id');
            } elseif ($this->selectedType == 'brand_link') {
                $options = Brand::forAdmin(Auth::id())->get()->pluck('name', 'id');
            } elseif ($this->selectedType == 'most_sales') {
            }
        }

        return view('admin::livewire.design.large-banner-form', [
            'options' => $options,
        ]);
    }
}
