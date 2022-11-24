<?php

namespace Modules\Admin\Http\Livewire\Products;

use Illuminate\Support\Facades\Session;
use Livewire\Component;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Product;

class CreateProductLivewire extends Component
{
    public
        $title,
        $sku,
        $quantity,
        $wheight,
        $short_description,
        $description,
        $price,
        $cost,
        $discount,
        $free_shipping,
        $is_active = true,
        $store_id,
        $category_id = null;

    public function mount()
    {
        $this->store_id = Session::get('store')->id;
    }
    protected $rules = [
        'title' => 'required',
        'sku' => 'sometimes',
        'quantity' => 'sometimes',
        'wheight' => 'sometimes',
        'short_description' => 'sometimes|max:20',
        'description' => 'sometimes',
        'price' => 'required',
        'cost' => 'sometimes',
        'discount' => 'sometimes',
        'free_shipping' => 'sometimes',
        'is_active' => 'required|boolean',
        'category_id' => 'sometimes',
        'store_id' => 'required|integer|exists:stores,id',
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }

    public function render()
    {
        $categories = Category::with('childs')->where('store_id', Session::get('store')->id)->get();
        return view('admin::livewire.products.create-product-livewire', compact('categories'));
    }

    public function save()
    {
        $data = $this->validate();
        Product::create($data);
        return redirect()->route('admin.products.index');
    }
}
