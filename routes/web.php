<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Both Roles user and admin
    Route::get('/product', [ProductController::class, 'index']) -> name ('products.index');

    // Admin only
    Route::middleware('role:admin')->group(function () {
        Route::get('/product/create', [ProductController::class, 'create']) -> name ('products.create');
        Route::post('/product', [ProductController::class, 'store']) -> name ('products.store');
        Route::get('/product/{product}/edit', [ProductController::class, 'edit']) -> name ('products.edit');
        Route::put('/product/{product}/update', [ProductController::class, 'update']) -> name ('products.update');
        Route::delete('/product/{product}/remove', [ProductController::class, 'remove']) -> name ('products.remove');
    });

    // /product/create/ must be initialized first before show page
    Route::get('/product/{product}', [productController::class, 'show']) -> name ('products.show');
});

require __DIR__.'/auth.php';
