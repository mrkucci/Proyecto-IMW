<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //Proteger la autentificación de usuarios
    public function __construct()
    {
        $this->middleware('auth');
    }

    
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
    public function store(ProductRequest $request)
    {
        $product = Product::create($request->validated());

        return redirect()
            ->route('products.index')
            ->withSuccess("El producto con el id {$product->id} ha sido creado con éxito.");
    }

    //Mostrar un producto
    public function show(Product $product)
    {
        return view('products.show')->with([
            'product' => $product,
        ]);
    }

    //Editando un producto
    public function edit(Product $product)
    {
        return view('products.edit')->with([
            'product' => $product, 
        ]);
    }

    //Actualizando un producto
    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()
            ->route('products.index')
            ->withSuccess("El producto con el id {$product->id} ha sido editado con éxito.");
    }

    //Eliminar un producto
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()
            ->route('products.index')
            ->withSuccess("El producto con el id {$product->id} ha sido borrado con éxito.");;
    } 


    
}
