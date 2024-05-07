<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StockController;
use Illuminate\Support\Facades\Route;

Route::get('/', IndexController::class)->name("index");

Route::get("/shop/product-detail/{product_id}", [StockController::class, 'show']
)->name('product-detail');

Route::get("/shop", [StockController::class, 'index'])->name("shop");

Route::get("/login", function (){
    return view("login");
})->name("login");

Route::get("/register", function (){
    return view("register");
})->name("register");

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
