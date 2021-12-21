<div class="card">
    <img src="{{ asset($product->images->first()->ruta) }}" class="card-img-top" height="500">
    <div class="card-body">
        <h4 clas="text-right"><strong>{{ $product->precio }}&#8364;</strong></h4>
        <h5 clas="card-title">{{ $product->titulo }}</h5>
        <h5 clas="card-text">{{ $product->descripcion }}</h5>
        <h5 clas="card-text"><strong>{{$product->stock}} en Stock</strong></h5>

        <form action="POST" class="d-inline" action="{{ route('products.carts.store', ['product' => $product->id]) }}">
            @csrf
            <button type="submit" class="btn btn-success">Añadir al carrito</button>
        </form>
    </div>
</div>