<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\TaxNumber;

class TaxNumberController extends Controller
{
    public function index()
    {
        $tax_numbers = TaxNumber::where('store_id',Auth::user()->admin->store->id)->get();

        return view('admin::settings.taxNumber.index',compact('tax_numbers'));
    }

    public function edit(TaxNumber $taxNumber)
    {
        return view('admin::settings.taxNumber.edit',compact('taxNumber'));
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
