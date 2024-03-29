<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::resource('carts', CartController::class);
Route::resource('purchases', PurchaseController::class,);
Route::resource('products', ProductController::class);
Route::resource('categories', CategoryController::class);


Route::prefix('search')->name('search.')->group(function () {
    Route::get('user', [SearchController::class, 'user'])->name('user');
    Route::get('admin', [SearchController::class, 'admin'])->name('admin');
});




