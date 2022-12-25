<?php

namespace Modules\Store\Http\Controllers;


use Illuminate\Http\Request;
use Modules\Admin\Entities\Store;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Modules\Admin\Entities\Category;
use Illuminate\Support\Facades\Route;

class StoreController extends Controller
{
    protected $store;

    public function __construct(Request $request)
    {
        $this->storeLink = $request->route('storeLink');
    }

    public function index()
    {
        $storeCategories = Category::with('products')->withCount('products')->whereHas('store', function ($query) {
            $query->where('store_link', $this->storeLink);
        })->get();
        $categories = Category::buildCategoryTree($storeCategories);

        return view('store::index', ['categories' => $categories, 'storeLink' => $this->storeLink]);
    }

    public function productDetails()
    {
        $product_id = Route::current()->parameter('product');
        $product = Product::findOrFail($product_id);

        return view('store::products.productDetails', ['store' => $this->store, 'product' => $product]);
    }

    public function categoryProducts(Category $category)
    {
        // $categoryWithProducts = new CategoriesWithProductsResource($category);
        // return $categoryWithProducts;
    }
}
