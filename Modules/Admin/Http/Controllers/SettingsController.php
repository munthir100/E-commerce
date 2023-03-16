<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Store;

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

    function store()
    {
        return view('admin::settings.store');
    }

    function paymentMethods()
    {
        return view('admin::settings.paymentMethods');
    }

    function shipping()
    {
        return view('admin::settings.shipping');
    }

    function teamwork()
    {
        return view('admin::settings.teamwork');
    }

    function domain()
    {
        return view('admin::settings.domain');
    }

    function services()
    {
        return view('admin::settings.services');
    }

    function rating()
    {
        $serverName = url('/');
        $storeLink = Store::whereHas('admin', function ($query) {
            $query->where('user_id', Auth::id());
        })->pluck('store_link')->first();

        $storeLink = $serverName . '/' . $storeLink . '/rating';

        return view('admin::settings.rating', compact('storeLink'));
    }

    function countries()
    {
        return view('admin::settings.countries');
    }

    function additionalSetting()
    {
        return view('admin::settings.additionalSetting');
    }
}
