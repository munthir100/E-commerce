<?php

namespace Modules\Admin\Http\Livewire\Products;

use Livewire\Component;
use Modules\Admin\Entities\Product;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;
use Illuminate\Support\Facades\Session;

class UpdateProductLivewire extends Component
{

    public $product, $image, $title, $sku, $quantity, $wheight, $short_description,
        $description, $price, $cost, $discount, $free_shipping, $is_active = true,
        $category_id, $categories, $user_id, $main_image, $sub_images, $store_id;

    function mount()
    {
        $this->image = $this->product->image;
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

        $this->categories = Category::with('children')->whereHas('store.admin', function ($query) {
            $query->where('user_id', Auth::id());
        })->get();
    }

    protected $rules = [
        'image'             => 'required',
        'sub_images.*'      => 'sometimes',
        'title'             => 'required',
        'sku'               => 'sometimes',
        'quantity'          => 'sometimes',
        'wheight'           => 'sometimes',
        'short_description' => 'sometimes|max:20',
        'description'       => 'sometimes',
        'price'             => 'required|numeric',
        'cost'              => 'sometimes',
        'discount'          => 'sometimes',
        'free_shipping'     => 'sometimes',
        'is_active'         => 'required|boolean',
        'category_id'       => 'sometimes',
    ];


    public function render()
    {
        return view('admin::livewire.products.update-product-livewire');
    }

    function save()
    {
        $validatedData = $this->validate();
        if ($validatedData['category_id'] === '') {
            $validatedData['category_id'] = null;
        }
        $this->product->fill($validatedData);
        if ($this->product->is_active == '') {
            $this->product->is_active = false;
        }
        $this->product->save();
        session()->flash('success', 'product data updated');
        return to_route('admin.products.index');
    }
}
