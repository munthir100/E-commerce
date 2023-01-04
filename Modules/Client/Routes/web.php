<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\ClientController;
use Modules\Client\Http\Controllers\OrderController;
use Modules\Client\Http\Controllers\ShippingController;
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

Route::prefix('{storeLink}')->name('client.')->group(function () {
    Route::get('/dashboard', [OrderController::class,'index'])->name('dashboard');
    Route::resource('/shipping',ShippingController::class);
    Route::resource('/orders',OrderController::class);
});

