<?php

use Illuminate\Support\Facades\Route;
use Modules\Client\Http\Controllers\OrderController;
use Modules\Client\Http\Controllers\ShippingController;



Route::prefix('{storeLink}')->name('client.')->middleware(['client'])->group(function () {
    Route::get('/dashboard', [OrderController::class,'index'])->name('dashboard');
    Route::resource('/shipping',ShippingController::class);
    Route::resource('/orders',OrderController::class);
});
