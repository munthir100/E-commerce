<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware(['auth', 'role:admin'])->name('admin.')->group(function () {
    
});
