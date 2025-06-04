<?php

use App\Http\Controllers\ListProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Show products list
Route::get('/listproduk', [ListProdukController::class, 'show'])->name('produk.index');

// Save new product
Route::post('/listproduk', [ListProdukController::class, 'save'])->name('produk.simpan');

// Get product data for edit modal (AJAX)
Route::get('/listproduk/{id}/edit', [ListProdukController::class, 'edit'])->name('produk.edit');

// Update product - Changed to PUT method
Route::put('/listproduk/{id}', [ListProdukController::class, 'update'])->name('produk.update');

// Delete product
Route::delete('/listproduk/{id}', [ListProdukController::class, 'delete'])->name('produk.delete');