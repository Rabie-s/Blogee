<?php

use App\Http\Controllers\auth\CustomAuthController;



Route::prefix('admin')->group(function () {
    Route::get('login', [CustomAuthController::class, 'index'])->name('auth.login')->middleware('guest');
    Route::post('login', [CustomAuthController::class, 'authenticate'])->name('auth.authenticate')->middleware('guest');
    Route::get('logout', [CustomAuthController::class, 'logout'])->name('auth.logout');
});


