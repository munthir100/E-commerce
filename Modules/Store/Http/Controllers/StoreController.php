<?php

namespace Modules\Store\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Modules\Admin\Entities\Category;

class StoreController extends Controller
{

    public function index($storeLink)
    {
        $categories = Category::forStoreLink($storeLink)->with('products')->get();
        $categories = Category::buildCategoryTree($categories);
        $products = $categories->pluck('products')->flatten();

        return view('store::index', compact('categories', 'storeLink', 'products'));
    }


    public function productDetails($storeLink, $productId)
    {
        $product = Product::with('category')->findOrFail($productId);
        $categories = $product->category->forStoreLink($storeLink)->get();
        $categories = Category::buildCategoryTree($categories);

        return view('store::products.productDetails', compact('storeLink', 'product', 'categories'));
    }


    public function categoryProducts($storeLink, $categoryTitle)
    {
        $category = Category::where('title', $categoryTitle)->forStoreLink($storeLink)->with('products')->first();
        $categories = Category::forStoreLink($storeLink)->get();
        $categories = Category::buildCategoryTree($categories);
        $products = $category->products;

        return view('store::categories.categoryProducts', compact('storeLink', 'category', 'products', 'categories'));
    }
}
