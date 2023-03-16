<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Brand;
use Modules\Admin\Entities\Category;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $perPage = request()->query('per_page', 25);
        $searchQuery = request()->query('q', '');
        $categoryId = request()->query('category_id', null);

        $brands = Brand::with('category')->forAdmin(Auth::id())
            ->search($searchQuery, $categoryId)
            ->paginate($perPage);
        $categories = Category::forAdmin(Auth::id())->get();

        return view('admin::Brands.index', compact('brands', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::create');
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
        return view('admin::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $brand = Brand::with('category')->find($id);
        $userId = Auth::id();
        $categories = Category::whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();
        return view('admin::Brands.edit', compact('brand', 'categories'));
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
    public function destroy(Brand $brand)
    {
        $brand->delete();
        return back();
    }
}
