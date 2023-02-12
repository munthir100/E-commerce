<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Store;

class StoreSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */

    public function rules(){
        return [
            'admin_id' => Auth::user()->admin->id,
            'store_name' => $request->store_name ,
            'store_link' =>$request->store_link,
            'store_description' => $request->store_description,
            'instagram_link' => $request->instagram_link,
            'snapchat_link'=> $request->snapchat_link,
            'twitter_link' => $request->twitter_link,
            'tiktok_link'  => $request->tiktok_link,
            'telegram_link' => $request->telegram_link,
            'whatsapp_number' => $request->whatsapp_number,
            'phone_number' => $request->phone_number,
            'facebook_user' => $request->facebook_user,
            'google_play_link' => $request->google_play_link,
            'apple_store_link' => $request->apple_store_link
        ] ;
    }

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
            $admin = Auth::user()->admin;
            if ($admin){
                if (!($admin->store)){
                    $store = new Store();
                    $store->admin_id =  $admin->id;
                }else{
                    $store = $admin->store;
                }
                $store->store_name = $request->store_name ?? $store->store_name;
                $store->store_link = $request->store_link ?? $store->store_link;
                $store->store_desc = $request->store_description ?? $store->store_description;
                $store->instagram_link = $request->instagram_link ?? $store->instagram_link;
                $store->snapchat_link = $request->snapchat_link ?? $store->snapchat_link;
                $store->twitter_link = $request->twitter_link ?? $store->twitter_link;
                $store->tiktok_link = $request->tiktok_link ?? $store->tiktok_link;
                $store->telegram_link = $request->telegram_link ?? $store->telegram_link;
                $store->whatsapp_number = $request->whatsapp_number ?? $store->whatsapp_number;
                $store->phone_number = $request->phone_number ?? $store->phone_number;
                $store->facebook_user = $request->facebook_user ?? $store->facebook_user;
                $store->google_play_link = $request->google_play_link ?? $store->google_play_link;
                $store->apple_store_link = $request->apple_store_link ?? $store->apple_store_link;
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
