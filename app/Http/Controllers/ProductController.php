<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //Lista de productos
    public function index()
    {
        $products = Product::all();

        return view('products.index')->with('products', $products);
    }

    //Crear un producto
    public function create()
    {
        return view('products.create');
    }

    //Almacenar un producto
    public function store(Request $request)
    {
        $product = Product::create(request()->all());

        return ($product);
    }

    //Mostrar un producto
    public function show($product)
    {
        $product = Product::findOrFail($product);

        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    //Editando un producto
    public function edit($product)
    {
        return view('products.edit')->with([
            'product' => Product::findOrFail($product),     //Con findOrFail si no se encuentra el producto se devuelve una vista con error 404
        ]);
    }

    //Actualizando un producto
    public function update($product)
    {
        $product = Product::findOrFail($product);

        $product->update(request()->all());

        return $product;
    }

    //Eliminar un producto
    public function destroy($product)
    {
        $product = Product::findOrFail($product);

        $product->delete();

        return $product;
    }
}
