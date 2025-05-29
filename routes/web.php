<?php

use App\Http\Controllers\ListProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/listproduk', [ListProdukController::class, 'show']);

// Route Baru untuk menerima reques post
Route::post('/listproduk', [ListProdukController::class, 'simpan'])->name('produk.simpan');


Route::get('/', function () {
    return view('welcome');
});