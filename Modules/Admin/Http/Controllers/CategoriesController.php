<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $userId = Auth::id();
        $allCategories = Category::whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        $categories = Category::buildCategoryTree($allCategories);

        return view('admin::Categories.index', compact('categories','allCategories'));
    }


    /**
     * Show the specified resource.
     * @param int Category $category
     * @return Renderable
     */
    public function show(Category $category)
    {
        return view('admin::Categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int Category $category
     * @return Renderable
     */
    public function edit($id)
    {
        $category = Category::with('parent')->find($id);
        $userId = Auth::id();
        $categories = Category::whereHas('store.admin', function ($query) use ($userId) {
            $query->where('user_id', $userId);
        })->get();

        return view('admin::Categories.edit',compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int Category $category
     * @return Renderable
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int Category $category
     * @return Renderable
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('admin::categories.index');
    }
}
