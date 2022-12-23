<?php

namespace Modules\Admin\Http\Livewire\Products;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Product;

class CreateProductLivewire extends Component
{
    use WithFileUploads;
    public
        $image,
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
        $category_id = null,
        $categories;

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
        'category_id' => 'required',
    ];

    public function updated($data)
    {
        $this->validateOnly($data);
    }

    public function render()
    {
        $userId = Auth::id();
        $this->categories = Category::with('children')->whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
        return view('admin::livewire.products.create-product-livewire');
    }

    public function save()
    {
        $data = $this->validate();
        $product = Product::create($data);
        if ($this->image) {
            $product->addMedia($this->image)->toMediaCollection('images');
        } else {
            dd('d');
        }

        return redirect()->route('admin.products.index');
    }
}
