<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    
    public function index($storeLink)
    {
        $orders = null;
        return view('client::orders.index',compact('storeLink','orders'));
    }

    
    public function create()
    {
        return view('client::orders.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        return view('client::orders.show');
    }

    
    public function edit($id)
    {
        return view('client::orders.edit');
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
