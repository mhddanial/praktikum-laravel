<?php

use App\Http\Controllers\ListProductController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/praktikum_5', function () {
    return view('praktikum_5');
});

Route::get('/list_product', [ListProductController::class, 'tampilkan']);

Route::get('/product', [ProductController::class, 'index']);