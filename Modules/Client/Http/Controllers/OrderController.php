<?php

namespace Modules\Client\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class OrderController extends Controller
{
    
    public function index($storeLink)
    {
        return view('client::orders.index',compact('storeLink'));
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
