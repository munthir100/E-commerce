<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class SettingsController extends Controller
{

    public function index()
    {
        return view('admin::settings.index');
    }

    function subscriptions()
    {
        return view('admin::settings.subscriptions');
    }

    function profile()
    {
        return view('admin::settings.profile');
    }
}
