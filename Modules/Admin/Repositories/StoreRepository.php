<?php

namespace Modules\Admin\Repositories;

use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Store;

class StoreRepository
{


    public function rules(){
        return [
            'store_name' => ["nullable"] ,
            'store_link' =>["nullable"],
            'store_description' => ["nullable"],
            'instagram_link' => ["nullable"],
            'snapchat_link'=> ["nullable"],
            'twitter_link' => ["nullable"],
            'tiktok_link'  => ["nullable"],
            'telegram_link' => ["nullable"],
            'whatsapp_number' => ["nullable"],
            'phone_number' => ["nullable"],
            'facebook_user' => ["nullable"],
            'google_play_link' => ["nullable"],
            'apple_store_link' => ["nullable"]
        ] ;
    }

    public function get_admin(){
        return Auth::user()->admin;
    }

    public function standard(){

    }

    public function store($request){
        $admin = $this->get_admin();
        $store = new Store();
        $store->admin_id = $admin->id;
        $store->store_name = $request->store_name ?? null;
        $store->store_link = $request->store_link ?? null;
        $store->store_desc = $request->store_description ?? null;
        $store->instagram_link = $request->instagram_link ?? null;
        $store->snapchat_link = $request->snapchat_link ?? null;
        $store->twitter_link = $request->twitter_link ?? null;
        $store->tiktok_link = $request->tiktok_link ?? null;
        $store->telegram_link = $request->telegram_link ?? null;
        $store->whatsapp_number = $request->whatsapp_number ?? null;
        $store->phone_number = $request->phone_number ?? null;
        $store->facebook_user = $request->facebook_user ?? null;
        $store->google_play_link = $request->google_play_link ?? null;
        $store->apple_store_link = $request->apple_store_link ?? null;
        $store->save();
        return response()->json(["success" => 1])->send();

    }

    public function update($request){
        $store = $this->get_admin()->store;
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
        $store->save();
        return response()->json(["success" => 1])->send();
    }



}
