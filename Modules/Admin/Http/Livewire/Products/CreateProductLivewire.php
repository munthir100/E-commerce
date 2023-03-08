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
        $images,
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
        $categories,
        $user_id,
        $store_id;

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
        $validatedData = $this->validate();
        $validatedData['user_id'] = Auth::id();
        $validatedData['store_id'] = auth()->user()->admin->store->id;
        Product::create($validatedData);
        session()->flash('success', 'product created successfully');
        
        return redirect()->route('admin.products.index');
    }
}
