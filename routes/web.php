<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowingController;
use App\Http\Controllers\LaporanController;

Route::get('/login',[AuthController::class,'loginForm'])
    ->name('login');

Route::post('/login',[AuthController::class,'login']);

Route::get('/logout',[AuthController::class,'logout']);

Route::get('/admin-only', function () {
    return "Halaman Admin";
})->middleware(['auth','role:admin']);
Route::get(
    '/laporan-peminjaman',
    [LaporanController::class,'peminjaman']
);

use App\Models\Category;
Route::get('/', function () {

    $kategori = Category::withCount('books')->get();

    return view('dashboard', compact('kategori'));

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

    Route::get('/peminjaman',[BorrowingController::class,'tampil']);

Route::get('/peminjaman/tambah',[BorrowingController::class,'tambah']);

Route::post('/peminjaman/simpan',[BorrowingController::class,'simpan']);

Route::get('/peminjaman/edit/{id}',[BorrowingController::class,'edit']);

Route::post('/peminjaman/ubah/{id}',[BorrowingController::class,'ubah']);

Route::get('/peminjaman/hapus/{id}',[BorrowingController::class,'hapus']);

});
