<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class,'loginForm'])
    ->name('login');

Route::post('/login',[AuthController::class,'login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/admin-only', function () {
    return "Halaman Admin";
})->middleware(['auth','role:admin']);

Route::get('/', function()
{
    return view('dashboard');
})->middleware('auth');