<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;

class ProductController extends Controller
{
    public function index()
    {
        $perPage = request()->query('per_page', 25);
        $searchQuery = request()->query('q', '');
        $categoryId = request()->query('category_id', null);

        $products = Product::when($searchQuery, function ($query, $searchQuery) {
            return $query->where('title', 'like', '%' . $searchQuery . '%');
        })->when($categoryId, function ($query, $categoryId) {
            return $query->where('category_id', $categoryId);
        })->where('user_id', Auth::id())->paginate($perPage);

        $userId = Auth::id();
        $categories = Category::whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();


        return view('admin::Products.index', compact('products', 'categories'));
    }


    public function create()
    {
        return view('admin::Products.create');
    }




    public function edit(Product $product)
    {
        return view('admin::Products.edit', compact('product'));
    }

    public function destroy(Product $product)
    {
        if ($product->orders()->exists()) {
            return redirect()->back()->with('error', 'Please delete orders first');
        }

        $product->delete();

        return redirect()->route('admin.Products.index');
    }
}
