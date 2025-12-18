<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;


// PRODUCTS
Route::get('/products/{id}', [ProductController::class, 'show'])
    ->name('products.show');

// AUTH
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

// CATEGORIES
Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

// HOME PAGE
Route::get('/', function () {
    return view('welcome');
});
// =======================
// ADMIN ROUTES (КП3-17)
// =======================

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // PRODUCTS
    Route::get('/products/{id}/edit', [AdminProductController::class, 'edit'])
        ->name('products.edit');

    Route::put('/products/{id}', [AdminProductController::class, 'update'])
        ->name('products.update');

    // CATEGORIES
    Route::get('/categories/{id}/edit', [AdminCategoryController::class, 'edit'])
        ->name('categories.edit');

    Route::put('/categories/{id}', [AdminCategoryController::class, 'update'])
        ->name('categories.update');
});
