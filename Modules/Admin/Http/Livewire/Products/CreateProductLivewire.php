<?php

namespace Modules\Admin\Http\Livewire\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use Modules\Admin\Entities\Product;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\ProductImage;

class CreateProductLivewire extends Component
{
    use WithFileUploads;

    public $image, $title, $sku, $quantity, $wheight, $short_description,
        $description, $price, $cost, $discount, $free_shipping, $is_active = true,
        $category_id, $categories, $user_id, $main_image, $sub_images, $store_id;

    protected $rules = [
        'image'             => 'required|image',
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

    public function mount()
    {
        $this->categories = Category::with('children')
            ->whereHas('store.admin', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->get();
    }

    public function save()
    {
        $validatedData = $this->validate();
        $validatedData['sku']       = $validatedData['sku'] ?? mt_rand(100000, 999999);
        $validatedData['user_id']   = Auth::id();
        $validatedData['store_id']  = auth()->user()->admin->store->id;

        $mainImagePath = $this->image->store('products/images', 'public');

        $product = new Product($validatedData);
        $product->image = $mainImagePath;
        $product->save();

        if (isset($validatedData['sub_images'])) {
            foreach ($validatedData['sub_images'] as $subImage) {
                $subImagePath = $subImage->store('products/images', 'public');
                $product->productImages()->save(
                    new ProductImage(['path' => $subImagePath])
                );
            }
        }


        session()->flash('success', 'product created successfully');
        return redirect()->route('admin.products.index');
    }

    public function render()
    {
        return view('admin::livewire.products.create-product-livewire');
    }
}
