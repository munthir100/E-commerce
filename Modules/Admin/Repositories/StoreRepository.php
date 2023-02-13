<?php

namespace Modules\Admin\Repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
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

    public function store($request){
        $data = array_filter( $request->except(['_token']));
        Store::updateOrCreate([
            'admin_id'   =>  $this->get_admin()->id,
        ],$data);
        return true;
    }



}
