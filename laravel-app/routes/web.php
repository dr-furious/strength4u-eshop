<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name("index");

Route::get("/shop/product-detail/{product_id}", [StockController::class, 'show']
)->name('product-detail');

Route::get("/shop", function () {
    return view("shop");
})->name("shop");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
