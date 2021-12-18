@extends('layouts.app')

@section('content')

    <h1>Happy Hour Gaming</h1>

    <p>Let's game!</p>
    <a class="btn btn-success"href="{{route('products.index')}}">Lista de productos</a>


@endsection