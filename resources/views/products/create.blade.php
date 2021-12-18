@extends('layouts.app')

@section('content')
    <h1>Crear un producto</h1>

    <form method="POST" action="{{route('products.store')}}">
    @csrf
        <div class="form-row">
            <label>Título</label>
            <input class="form-control" type="text" name="titulo" value="{{old('titulo')}}" required>
        </div>
        <div class="form-row">
            <label>Descripción</label>
            <input class="form-control" type="text" name="descripcion" value="{{old('descripcion')}}" required>
        </div>
        <div class="form-row">
            <label>Precio</label>
            <input class="form-control" type="number" min="1.00" step="0.05" name="precio" value="{{old('precio')}}" required>
        </div>
        <div class="form-row">
            <label>Stock</label>
            <input class="form-control" type="text" min="0" name="stock" value="{{old('stock')}}" required>
        </div>
        <div class="form-row">
            <label>Status</label>
            <select class="custom-select" name="status" required>
                <option value="" selected>Selecciona...</option>
                <option {{old('status') == 'disponible' ? 'selected' : ''}}  value="disponible">Disponible</option>
                <option {{old('status') == 'no disponible' ? 'selected' : ''}} value="no disponible">No disponible</option>
            </select>
        </div>
        <div class="form-row">
            <button type="submit" class="btn btn-primary btn-lg">Crear producto</button>
        </div>
        
    </form>

@endsection