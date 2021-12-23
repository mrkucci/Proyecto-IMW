<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class ProductCartController extends Controller
{
    public function store(Request $request, Product $product)
    {
        $cart = $this->getFromCookieOrCreate();
        

        $cantidad = $cart->products()
            ->find($product->id)
            ->pivot
            ->cantidad ?? 0;

        $cart->products()->sync([
            $product->id => ['cantidad' => $cantidad + 1],
        ]);

        $cookie = Cookie::make('cart', $cart->id, 7 * 24 * 60);   //Con las multiplicaciones indicamos la duración en minutos.

        return redirect()->back()->cookie($cookie);
    }

    public function destroy(Product $product, Cart $cart)
    {
        //
    }


    public function getFromCookieOrCreate(){
        $cartId = Cookie::get('cart');

        $cart = Cart::find($cartId);

        return $cart ?? Cart::create();
    }
}
