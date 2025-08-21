<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Auth routes
Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Product routes

Route::middleware('auth')->group(function () {
    Route::resource('products', ProductController::class)->names([
        'index'  => 'products.index',
        'create' => 'products.create',
        'store'  => 'products.store',
        'edit'   => 'products.edit',
        'update' => 'products.update',
        'destroy'=> 'products.destroy',
    ]);
});