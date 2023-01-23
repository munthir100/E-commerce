<?php

namespace Modules\Store\Http\Controllers;

use App\Traits\HasCategoriesTrait;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Modules\Admin\Entities\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class StoreController extends Controller
{
    use HasCategoriesTrait;

    public function index($storeLink)
    {
        $categories = Category::forStoreLink($storeLink)->with('products')->get();
        $products = $categories->pluck('products')->flatten();
        $categories = Category::buildCategoryTree($categories);

        return view('store::index', compact('categories', 'storeLink', 'products'));
    }


    public function productDetails($storeLink, $productId)
    {
        $product = Product::with('category')->findOrFail($productId);
        $categories = $this->getCategories($storeLink);

        return view('store::products.productDetails', compact('storeLink', 'product', 'categories'));
    }


    public function categoryProducts($storeLink, $categoryTitle)
    {
        $category = Category::where('title', $categoryTitle)->forStoreLink($storeLink)->with('products')->first();
        $products = $category->products;
        $categories = $this->getCategories($storeLink);

        return view('store::categories.categoryProducts', compact('storeLink', 'category', 'products', 'categories'));
    }

    public function checkout($storeLink)
    {
        $categories = $this->getCategories($storeLink);
        $items = Cart::content();
        $productIds = [];

        foreach ($items as $item) {
            $productIds[] = $item->id;
        }
        $products = Product::whereIn('id', $productIds)->get();

        return view('store::checkout.index', compact('categories', 'storeLink'))->with('items', $items)->with('products', $products);
    }

    public function shipping()
    {
        dd('soon');
    }
}
