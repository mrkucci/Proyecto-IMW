<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Lista de productos
    public function index()
    {
        return view('products.index');
    }

    //Crear un producto
    public function create()
    {
        return 'Este es el formulario de creación de productos';
    }

    //Almacenar un producto
    public function store(Request $request)
    {
        //
    }

    //Mostrar un producto
    public function show($product)
    {
        return view('products.show');
    }

    //Editando un producto
    public function edit($product)
    {
        return "Editando el producto con el id {$product} desde el controlador.";
    }

    //Actualizando un producto
    public function update(Request $request, Product $product)
    {
        //
    }

    //Eliminar un producto
    public function destroy(Product $product)
    {
        //
    }
}
