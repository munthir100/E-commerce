<?php

use Illuminate\Support\Facades\Route;
use Modules\Admin\Http\Controllers\ClientController;
use Modules\Client\Http\Controllers\OrderController;
use Modules\Client\Http\Controllers\ShippingController;
use Modules\Store\Http\Controllers\StoreController;



Route::prefix('{storeLink}')->name('client.')->middleware(['client'])->group(function () {
    Route::get('/dashboard', [OrderController::class,'index'])->name('dashboard');
    Route::resource('/shipping',ShippingController::class);
    Route::resource('/orders',OrderController::class);
});
