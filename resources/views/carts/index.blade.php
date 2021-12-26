@extends('layouts.app')

@section('content')
    <h1>Tu carrito:</h1>
    @if($products->isEmpty())
        <div class="alert alert-warning mt-3">
            Tú carrito está vacío.
        </div>
    @else
        <div class="row">
            @foreach ($products as $product)
                <div class="col-3">
                    @include('components.product-card')
                </div>
            @endforeach
        </div>
    @endif
@endsection