<?php

namespace Modules\Store\Http\Controllers;

use Modules\Admin\Entities\Store;
use App\Traits\HasCategoriesTrait;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Modules\Admin\Entities\Category;
use Gloudemans\Shoppingcart\Facades\Cart;

class StoreController extends Controller
{
    use HasCategoriesTrait;

    public function index(Store $store)
    {
        $searchQuery = request()->query('searchTerm', '');
        $categoryId = request()->query('category_id', null);

        $categories = Category::buildCategoryTree($store->categories()->isActive()->get());

        $products = $store->products()
            ->isActive()
            ->when($searchQuery, function ($query, $searchQuery) {
                return $query->where('title', 'like', '%' . $searchQuery . '%');
            })
            ->orWhere('price', $searchQuery)
            ->get();
        $products_count = $products->count();
        return view('store::index', compact('categories', 'store', 'products', 'products_count'));
    }




    public function productDetails(Store $store, $productId)
    {
        $product = Product::with('category','productImages')->isActive()->findOrFail($productId);

        $categories = Category::buildCategoryTree($store->categories()->isActive()->get());
        $relatedProducts = $store->products()
            ->where('category_id', $product->category_id)
            ->where('id', '!=', $productId)
            ->get();
        return view('store::products.productDetails', compact('store', 'product', 'categories', 'relatedProducts'));
    }


    public function categoryProducts(Store $store, Category $category)
    {
        $categories = Category::buildCategoryTree($store->categories()->isActive()->get());
        $products = $category->products;
        $products_count = $products->count();
        return view('store::categories.categoryProducts', compact('store', 'category', 'products', 'categories','products_count'));
    }

    public function checkout(Store $store)
    {
        $categories = Category::buildCategoryTree($store->categories()->isActive()->get());
        $items = Cart::content();
        $productIds = [];

        foreach ($items as $item) {
            $productIds[] = $item->id;
        }
        $products = $store->products()->whereIn('id', $productIds)->get();

        return view('store::checkout.index', compact('categories', 'store'))->with('items', $items)->with('products', $products);
    }

    public function wishlist(Store $store)
    {
        $wishlist = session()->get('wishlist', []);
        $wishlistProducts = $store->products()->whereIn('id', $wishlist)->get();
        $categories = Category::buildCategoryTree($store->categories()->isActive()->get());
        return view('store::Wishlist.index', compact('store', 'wishlistProducts', 'categories'));
    }
}
