@extends('layouts.app')

@section('content')
    <h1>¡Bienvenido!</h1>
    <p>Let's game!</p>

    @empty($products)
        <div class="alert alert-danger mt-3">
            No hay productos aún.
        </div>
    @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-3">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endempty
@endsection