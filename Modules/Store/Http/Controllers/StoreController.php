<?php

namespace Modules\Store\Http\Controllers;


use Modules\Admin\Entities\Store;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Product;
use Modules\Admin\Transformers\CategoriesWithProductsResource;
use Modules\Admin\Transformers\StoreWithProductsResource;
use Modules\Admin\Transformers\storeWithCategoriesResource;

class StoreController extends Controller
{
    protected $store;

    public function __construct()
    {
        if (!is_null(request()->route('storeLink'))) {
            $storeLink = Route::current()->parameter('storeLink');
            $this->store = Store::where('store_link', $storeLink)->with('mainCategories')->first();
        }
    }

    public function index()
    {
        return view('store::index', ['store' => $this->store]);
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
