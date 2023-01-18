<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DashboardController;



Route::get('/logout', function () {
    auth()->logout();
});

Route::view('/theme', 'auth.dashboard');


Auth::routes();

Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');
