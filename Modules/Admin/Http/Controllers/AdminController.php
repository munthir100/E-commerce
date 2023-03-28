<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class AdminController extends Controller
{
    public function index()
    {
        return view('admin::Admin.index');
    }

    public function localize(Request $request)
    {
        $locale = $request->input('locale');
        session(['locale' => $locale]);
        return redirect()->back();
    }


}
