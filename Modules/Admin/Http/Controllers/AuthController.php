<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    
    public function adminLoginForm()
    {
        return view('admin::Auth.login');
    }

    public function adminRegisterForm()
    {
        return view('admin::Auth.register');
    }
}
