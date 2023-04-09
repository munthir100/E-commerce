<?php

namespace Modules\Admin\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Client\Entities\Client;
use Modules\Shipping\Entities\City;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $perPage = request()->query('per_page', 25);
        $searchQuery = request()->query('q', '');

        $clients = Client::search($searchQuery)
            ->where('store_id', Auth::user()->admin->store->id)
            ->with('user')
            ->paginate($perPage);

        return view('admin::Clients.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('admin::Clients.create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show(Client $client)
    {
        $perPage = request()->query('per_page', 25);
        $orders = $client->load('orders')->paginate($perPage);
        return view('admin::Clients.show', compact('client','orders'));
    }


    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit(Client $client)
    {
        return view('admin::Clients.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
