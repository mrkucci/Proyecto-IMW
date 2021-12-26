<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Services\CartService;

class ProductCartController extends Controller
{
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }


    public function store(Request $request, Product $product)
    {
        $cart = $this->cartService->getFromCookieOrCreate();
        

        $cantidad = $cart->products()
            ->find($product->id)
            ->pivot
            ->cantidad ?? 0;

        //La función de syncWithoutDetaching no nos elimina los productos iniciados en el carrito sólo aumenta su cantidad.
        $cart->products()->syncWithoutDetaching([
            $product->id => ['cantidad' => $cantidad + 1],
        ]);

        $cookie = Cookie::make('cart', $cart->id, 7 * 24 * 60);   //Con las multiplicaciones indicamos la duración en minutos.

        return redirect()->back()->cookie($cookie);
    }

    public function destroy(Product $product, Cart $cart)
    {
        //
    }

}
