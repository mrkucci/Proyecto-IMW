<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MainController;
use App\Models\Product;
use App\Http\Controllers\ProductCartController;


Route::get('/', function () {
    $products = Product::disponible()->get();  //Hacer un filtrado para que solo me muestre los disponibles.
    return view('welcome')->with([
        'products' => $products,
    ]);
});


Route::resource('products', ProductController::class);

Route::resource('products.carts', ProductCartController::class)->only(['store', 'destroy']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
