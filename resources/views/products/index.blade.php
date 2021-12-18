@extends('layouts.app')


@section('content')
    <h1>Lista de productos</h1>
    <a href="{{route('products.create')}}">Crear un producto</a>

    @empty($products)
        <div class="alert alert-warning">
            La lista de productos está vacía.
        </div>
    @else
        <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Título</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Stock</th>
                        <th>Status</th>
                    </tr>
                </thead>
                
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->titulo }}</td>
                        <td>{{ $product->descripcion }}</td>
                        <td>{{ $product->precio }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection

