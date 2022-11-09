<?php

use Illuminate\Support\Facades\Route;
use Modules\Store\Http\Controllers\StoreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('{storeLink}')->name('store .')->group(function () {
    route::get('/',[StoreController::class,'index']);
    route::get('/products',[StoreController::class,'products']);
    route::get('/product/{id}/details/{productName}',[StoreController::class,'index']);

    route::get('/category/{id}/products',[StoreController::class,'categoryProducts']);
});
