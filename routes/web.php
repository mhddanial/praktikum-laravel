<?php

use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('login');
});
Route::get('/product', function () {
    return view('product');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/users', [AdminUsersController::class, 'index']);
    
});

Route::get('/listbarang', [ListBarangController::class, 'tampilkan']);