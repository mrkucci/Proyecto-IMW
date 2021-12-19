<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Models\Product;


Route::get('/', function () {
    return view('welcome')->with([
        'products' => Product::all(),
    ]);
});

Route::resource('products', ProductController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
