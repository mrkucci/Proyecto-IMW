@extends('layouts.app')

@section('content')
    <h1>Editar un producto</h1>

    <form method="POST" action="{{route('products.update', ['product' => $product->id])}}">
        @csrf
        @method('PUT')
        <div class="form-row">
            <label>Título</label>
            <input class="form-control" type="text" name="titulo" value="{{old('titulo') ?? $product->titulo}}" required>
        </div>
        <div class="form-row">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion" value="{{old('descripcion') ?? $product->descripcion}}" required>
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" min="1.00" step="0.05" name="precio" value="{{old('precio') ?? $product->precio}}" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="text" min="0" name="stock" value="{{old('stock') ?? $product->stock}}" required>
        </div>
        <div class="form-row">
            <label>Status</label>
            <select class="custom-select mt-3" name="status" required>
                <option {{old('status') == 'disponible' ? 'selected' : ($product -> status == 'disponible' ? 'selected' : '')}} value="disponible">Disponible</option>
                <option {{old('status') == 'no disponible' ? 'selected' : ($product -> status == 'no disponible' ? 'selected' : '')}} value="no disponible">No disponible</option>
            </select>
        </div>
        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Editar producto</button>
        </div>
        
    </form>

@endsection