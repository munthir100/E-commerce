<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Modules\Admin\Entities\DefinitionPage;

class DefinitionPagesController extends Controller
{
    public function rules(){
        return [
            'title' => ["required"],
            'description'=>["required"],
            'is_active'=>["nullable"]
        ];
    }

    public function get_store(){
        return Auth::user()->admin;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('admin::index');
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
        try {
            $validator = Validator::make($request->all(),$this->rules());
            if ($validator->fails()){
                return response()->json(['errors'=>$validator->errors()]);
            }

            $definition_page = new DefinitionPage();
            $definition_page->title = $request->title;
            $definition_page->description = $request->description;
            if ($request->is_active){
                $definition_page->is_active = $request->is_active;
            }
            $definition_page->save();


        }catch (\Exception $e){
            return $e->getMessage();
        }
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
        return view('admin::edit');
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
