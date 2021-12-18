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
        $rules = [
            'titulo' => ['required', 'max:50'],
            'descripcion' => ['required', 'max:1000'],
            'precio' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:disponible,no disponible'],

        ];
        request()->validate($rules);



        if (request()->status == 'disponible' && request()->stock == 0){
            session()->flash('error', 'Si el producto está disponible no puede tener un Stock de 0 items.');

            return redirect()
                ->back()
                ->withInput(request()->all());
        }


        $product = Product::create(request()->all());

        session()->flash('success', "El producto con el id {$product->id} ha sido creado con éxito.");

        return redirect()->route('products.index');
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
        $rules = [
            'titulo' => ['required', 'max:50'],
            'descripcion' => ['required', 'max:1000'],
            'precio' => ['required', 'min:1'],
            'stock' => ['required', 'min:0'],
            'status' => ['required', 'in:disponible,no disponible'],

        ];
        request()->validate($rules);

        $product = Product::findOrFail($product);

        $product->update(request()->all());

        return redirect()->route('products.index');
    }

    //Eliminar un producto
    public function destroy($product)
    {
        $product = Product::findOrFail($product);

        $product->delete();

        return redirect()->route('products.index');
    } 
}
