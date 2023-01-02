<?php

namespace Modules\Store\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Modules\Admin\Entities\Category;
use Illuminate\Contracts\Support\Renderable;

class WishlistController extends Controller
{

    public function index($storeLink)
    {
        $wishlist = session()->get('wishlist', []);
        $wishlistProducts = Product::whereIn('id', $wishlist)->get();
        $categories = Category::forStoreLink($storeLink)->get();
        $categories = Category::buildCategoryTree($categories);
        return view('store::Wishlist.index', compact('storeLink','wishlistProducts','categories'));
    }

    public function create()
    {
        return view('store::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('store::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('store::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
