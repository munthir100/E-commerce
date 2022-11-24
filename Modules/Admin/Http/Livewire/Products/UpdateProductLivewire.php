<?php

namespace Modules\Admin\Http\Livewire\Products;

use Livewire\Component;
use Modules\Admin\Entities\Category;
use Illuminate\Support\Facades\Session;
use Modules\Admin\Entities\Product;

class UpdateProductLivewire extends Component
{
    public
        $product,
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
        $is_active,
        $category_id;

    function mount()
    {
        $this->title = $this->product->title;
        $this->sku = $this->product->sku;
        $this->quantity = $this->product->quantity;
        $this->wheight = $this->product->wheight;
        $this->short_description = $this->product->short_description;
        $this->description = $this->product->description;
        $this->price = $this->product->price;
        $this->cost = $this->product->cost;
        $this->discount = $this->product->discount;
        $this->free_shipping = $this->product->free_shipping;
        $this->is_active = $this->product->is_active;
        $this->category_id = $this->product->category_id;
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
        'is_active' => 'required',
        'category_id' => 'sometimes',
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }

    public function render()
    {
        $product = $this->product;
        $categories = Category::with('childs')->where('store_id', Session::get('store')->id)->get();
        return view('admin::livewire.products.update-product-livewire', compact('product', 'categories'));
    }

    function save()
    {
        dd($this->validate());
        $this->product->update($this->validate());
        return redirect()->route('admin.products.index');
    }
}
