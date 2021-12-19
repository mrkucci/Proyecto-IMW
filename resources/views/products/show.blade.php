@extends('layouts.app')

@section('content')
    <h1>{{ $product->titulo }}</h1>
    <p>{{ $product->descripcion}}</p>
    <p>{{ $product->precio}}</p>
    <p>{{ $product->stock}}</p>
    <p>{{ $product->status}}</p>
@endsection