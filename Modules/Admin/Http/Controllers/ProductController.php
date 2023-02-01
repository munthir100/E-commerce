<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('admin')) {
            $storeId = auth()->user()->admin->store->id;
            $products = Product::where('store_id', $storeId)->get();
        } else {
            $products = Product::where('user_id', Auth::id())->get();
        }



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
        if ($product->orders()->exists()) {
            return redirect()->back()->with('error', 'Please delete orders first');
        }

        $product->delete();

        return redirect()->route('admin.Products.index');
    }
}
