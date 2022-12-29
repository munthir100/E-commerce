<?php

namespace Modules\Store\Http\Livewire\Products;

use Livewire\Component;
use Modules\Admin\Entities\Product;

class SearchBar extends Component
{
    public $searchTerm;
    public $storeLink;

    public function render()
    {
        return view('store::livewire.products.search-bar');
    }
    public function search()
    {
        $products = Product::where('title', 'like', "%$this->searchTerm%")
            ->orWhere('description', 'like', "%$this->searchTerm%")
            ->whereHas('category.store', function ($query) {
                $query->where('store_link', $this->storeLink);
            })->isActive()->get();


        $this->emit('searchResults', $products);
    }
}
