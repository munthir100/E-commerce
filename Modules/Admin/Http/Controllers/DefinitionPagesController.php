<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\DefinitionPage;

class DefinitionPagesController extends Controller
{

    public function index()
    {
        $definitionPages = DefinitionPage::where('store_id', Auth::user()->admin->store->id)->get();
        return view('admin::settings.pages.index',compact('definitionPages'));
    }


    public function show($id)
    {
        return view('admin::show');
    }

    public function edit(DefinitionPage $page)
    {
        return view('admin::settings.pages.edit',compact('page'));
    }

    public function destroy(DefinitionPage $page)
    {
        $page->delete();
        session()->flash('success', 'definition page deleted successfully');

        return to_route('admin.settings.pages.index');
    }
}
