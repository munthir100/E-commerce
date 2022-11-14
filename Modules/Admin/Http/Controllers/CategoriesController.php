<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Category;
use Modules\Admin\Http\Requests\CategoryRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::categories.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::categories.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(CategoryRequest $request)
    {
        Category::create($request->validated());

        return redirect()->route('admin::categories.index');
    }

    /**
     * Show the specified resource.
     * @param int Category $category
     * @return Renderable
     */
    public function show(Category $category)
    {
        return view('admin::categories.show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int Category $category
     * @return Renderable
     */
    public function edit(Category $category)
    {
        return view('admin::categories.edit');
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
