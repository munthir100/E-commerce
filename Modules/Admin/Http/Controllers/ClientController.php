<?php

namespace Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\HasCategoriesTrait;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Product;
use Modules\Client\Entities\Client;
use Illuminate\Support\Facades\Auth;
use Modules\Admin\Entities\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\Support\Renderable;

class ClientController extends Controller
{
    use HasCategoriesTrait;

    function dashboard($storeLink)
    {
        return view('client::dashboard', compact('storeLink'));
    }

}
