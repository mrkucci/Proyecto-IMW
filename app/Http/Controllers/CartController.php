<?php

namespace App\Http\Controllers;

use App\Services\CartService;
use App\Models\Cart;

class CartController extends Controller
{
    //Inyección de dependencias
    public $cartService;

    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }


    
    //Mostrar el carrito de compra
    public function index()
    {    

        $cart = $this->cartService->getFromCookieOrCreate();
        return view('carts.index')->with([
            'products' => $cart->products,
        ]);
    }
}
