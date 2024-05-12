<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\EnsureUserIsAdmin;
use Illuminate\Support\Facades\Route;

Route::get("/", IndexController::class)->name("index");

Route::get("/shop/product-detail/{stock_id}", [StockController::class, "show"])->name("product-detail");

Route::get("/shop", [StockController::class, "index"])->name("shop");

Route::get("/shop/search", [StockController::class, "search"])->name("shop-search");

Route::post("/shop/cart", ShoppingCartController::class)->name("shop.cart");

Route::post("/order/create", [OrderController::class, "create"])->name("order.create");

Route::post("/order", [OrderController::class, "store"])->name("order.create");

Route::get("/order/{order_id}", [OrderController::class, "show"])->name("order.confirmation");

Route::get("/login", function () {
    return view("login");
})->name("login");

Route::get("/register", function () {
    return view("register");
})->name("register");

Route::middleware([EnsureUserIsAdmin::class])->group(function () {
    // admin routes
    Route::get("/admin", [ProductController::class, "index"])
        ->middleware(["auth"])
        ->name("admin");
    Route::get("/admin/create", [ProductController::class, "create"])
        ->middleware(["auth"])
        ->name("admin_create");
    Route::post("/admin/", [ProductController::class, "store"])->middleware(["auth"]);
    Route::get("/admin/{product_id}/", [ProductController::class, "show"])->middleware(["auth"]);
    Route::get("/admin/{product_id}/edit/", [ProductController::class, "edit"])->middleware(["auth"]);
    Route::put("/admin/{product_id}", [ProductController::class, "update"])->middleware(["auth"]);
    Route::delete("/admin/{product_id}/", [ProductController::class, "destroy"])->middleware(["auth"]);
});

Route::get("/images/{filename}", [ImageController::class, "show"]);
Route::middleware("auth")->group(function () {
    Route::get("/profile", [ProfileController::class, "edit"])->name("profile.edit");
    Route::patch("/profile", [ProfileController::class, "update"])->name("profile.update");
    Route::delete("/profile", [ProfileController::class, "destroy"])->name("profile.destroy");
});

require __DIR__ . "/auth.php";
