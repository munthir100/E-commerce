<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Store;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    
    public function index(Store $store)
    {
        $orders = auth()->user()->client->orders()->withCount('orderDetails')->get();
        return view('client::orders.index',compact('store','orders'));
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
