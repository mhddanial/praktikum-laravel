<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ListItemController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/praktikum_5', function () {
    return view('praktikum_5');
});

Route::get('/tes', function () {
    return view('tes');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/list_item', [ListItemController::class, 'index'])->name('list_item');
