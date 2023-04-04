<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

    function forgetPassword()
    {
        return view('admin::Auth.forgetPassword');
    }

    function resetPassword(Request $request)
    {
        $token = $request->query('token');
        $email = $request->query('email');
        $tokenData = DB::table('password_resets')->where('email', $email)->first();
        if (!$tokenData || !Hash::check($token,$tokenData->token)){
            abort(401);
        }
        return view('admin::Auth.resetPassword',compact('token','email'));
    }
}
