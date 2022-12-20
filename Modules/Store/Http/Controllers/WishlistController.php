<?php

namespace Modules\Store\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Store;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Store\Entities\Wishlist;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Support\Renderable;

class WishlistController extends Controller
{
    protected $store;

    public function __construct()
    {
        if (!is_null(request()->route('storeLink'))) {
            $storeLink = Route::current()->parameter('storeLink');
            $this->store = Store::where('store_link', $storeLink)->with('mainCategories')->first();
        }
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $wishlistProducts = Wishlist::where('user_id', Auth::user()->id)->with('products')->get();

        return view('store::Wishlist.index', [
            'store' => $this->store,
            'wishlistProducts' => $wishlistProducts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
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
