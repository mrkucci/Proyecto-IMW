<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductCartController extends Controller
{
    public function store(Request $request, Product $product)
    {
        dd('here');
    }

    public function destroy(Product $product, Cart $cart)
    {
        //
    }
}
