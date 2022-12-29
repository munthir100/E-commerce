<?php

namespace Modules\Store\Http\Livewire\Products;

use Livewire\Component;
use Modules\Admin\Entities\Product;

class ProductsList extends Component
{
    public $searchTerm;
    public $products;
    public $storeLink;

    protected $listeners = ['searchResults' => 'searchResult'];

    public function render()
    {
        return view('store::livewire.products.products-list');
    }
    public function searchResult($results)
    {
        $proDuctsArrayToCollection = collect($results)->map(function ($product) {
            return (object) $product;
        });
        $this->products = $proDuctsArrayToCollection;
    }
}
