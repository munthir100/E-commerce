<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class StoreDesignController extends Controller
{
    function storeDesign()
    {
        return view('admin::settings.design.storeDesign');
    }
    
    function theme()
    {
        return view('admin::settings.design.theme');
    }

    function sections()
    {
        return view('admin::settings.design.sections');
    }
}
