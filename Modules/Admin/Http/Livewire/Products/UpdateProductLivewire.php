<?php

namespace Modules\Admin\Http\Livewire\Products;

use Livewire\Component;
use Modules\Admin\Entities\Product;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;
use Illuminate\Support\Facades\Session;

class UpdateProductLivewire extends Component
{
    public
        $product,
        $title,
        $categories,
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
        $userId = Auth::id();
        $this->categories = Category::with('children')->whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
        return view('admin::livewire.products.update-product-livewire');
    }

    function save()
    {
        $this->product->fill($this->validate());
        if ($this->product->is_active == '') {
            $this->product->is_active = false;
        }
        $this->product->save();
        session()->flash('success', 'product data updated');
        return to_route('admin.products.index');
    }
}
