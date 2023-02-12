<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Store;
use Modules\Admin\Repositories\StoreRepository;

class StoreSettingController extends Controller
{
    private $repositoty;
    public function __construct(StoreRepository $repository)
    {
        $this->repositoty = $repository;
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
//            return $this->repositoty->store($request);
            $admin = Auth::user()->admin;
            if ($admin){
                if (!($admin->store)){
                    $this->repositoty->store($request);
                }else{
                    $this->repositoty->update($request);
                }

                if ($store->save()){
                    return redirect()->back();
                }
            }
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

    public function custom_check($requests){
        foreach ($requests as $key => $request){
            if ($request == null){
                unset($requests[$key]);
            }
        }
        return $requests;
    }
}
