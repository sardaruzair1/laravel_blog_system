<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\DashboardController;



Route::get('/logout', function () {
    auth()->logout();
});
Route::view('/', 'welcome');
Route::view('/theme', 'auth.dashboard');
Route::view('/tst', 'tst');


Auth::routes([
    'register' => false
]);

Route::get('dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

