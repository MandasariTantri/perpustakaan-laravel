<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;

Route::get('/login',[AuthController::class,'loginForm'])
    ->name('login');

Route::post('/login',[AuthController::class,'login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/admin-only', function () {
    return "Halaman Admin";
})->middleware(['auth','role:admin']);

Route::get('/', function () {
    return view('dashboard');
})->middleware('auth');

Route::middleware(['auth','role:admin'])->group(function(){

    // KATEGORI
    Route::get('/kategori',[CategoryController::class,'tampil']);
    Route::get('/kategori/tambah',[CategoryController::class,'tambah']);
    Route::post('/kategori/simpan',[CategoryController::class,'simpan']);
    Route::get('/kategori/edit/{id}',[CategoryController::class,'edit']);
    Route::post('/kategori/ubah/{id}',[CategoryController::class,'ubah']);
    Route::get('/kategori/hapus/{id}',[CategoryController::class,'hapus']);

    // BUKU
    Route::get('/buku',[BookController::class,'tampil']);
    Route::get('/buku/tambah',[BookController::class,'tambah']);
    Route::post('/buku/simpan',[BookController::class,'simpan']);
    Route::get('/buku/edit/{id}',[BookController::class,'edit']);
    Route::post('/buku/ubah/{id}',[BookController::class,'ubah']);
    Route::get('/buku/hapus/{id}',[BookController::class,'hapus']);

});