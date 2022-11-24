<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Illuminate\Contracts\Support\Renderable;
use Modules\Admin\Http\Requests\ProducRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $products = Product::where('store_id',session()->get('store')->id)->get();
        return view('admin::Products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::Products.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ProducRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('admin.Products.index');
    }

    /**
     * Show the specified resource.
     * @param int Product $product
     * @return Renderable
     */
    public function show(Product $product)
    {
        return view('admin::Products.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int Product $product
     * @return Renderable
     */
    public function edit(Product $product)
    {
        return view('admin::Products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int Product $product
     * @return Renderable
     */
    public function update(Request $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('admin.Products.index');
    }

    /**
     * Remove the specified resource from storage.
     * @param int Product $product
     * @return Renderable
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.Products.index');
    }
}
