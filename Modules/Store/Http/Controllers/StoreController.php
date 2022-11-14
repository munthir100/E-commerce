<?php

namespace Modules\Store\Http\Controllers;


use Modules\Admin\Entities\Store;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use Modules\Admin\Entities\Category;
use Modules\Admin\Transformers\CategoriesWithProductsResource;
use Modules\Admin\Transformers\StoreWithProductsResource;
use Modules\Admin\Transformers\storeWithCategoriesResource;

class StoreController extends Controller
{
    protected $store;

    public function __construct()
    {
        $storeLink = Route::current()->getParameter('storeLink');
        $this->store = Store::where('store_link', $this->$storeLink);
    }

    public function index()
    {
        $storeWithCategories = new storeWithCategoriesResource($this->store);
        return $storeWithCategories;
    }

    public function products()
    {
        $StoreWithProducts = new StoreWithProductsResource($this->store);
        return $StoreWithProducts;
    }

    public function categoryProducts(Category $category)
    {
        $categoryWithProducts = new CategoriesWithProductsResource($category);
        return $categoryWithProducts;
    }
}
