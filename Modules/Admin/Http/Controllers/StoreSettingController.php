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
    public function index()
    {
        $store = Store::whereHas('admin.user', function ($query) {
            $query->where('user_id', Auth::id());
        })->first();
        return view('admin::settings.store', compact('store'));
    }


}
