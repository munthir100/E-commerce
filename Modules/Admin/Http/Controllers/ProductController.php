<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{

    public function index()
    {
        $userId = Auth::id();
        $products = Product::whereHas('category.store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();


        return view('admin::Products.index', compact('products'));
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
        if ($product->dosentHave('orders')) {
            return redirect()->back()->with('error', 'please delete orders first');
        }
        $product->delete();

        return to_route('admin.Products.index');
    }
}
