@foreach ($products as $product)

    <a href="{{route('catalogo.show', $product)}}">{{$product->nombre}} </a>
    Precio: {{$product->precio_base}}€<br>
    Descripcion: {{$product->descripcion}}<br>
    Categoria: {{$product->category->nombre}}<br>
    Precio Total: {{$product->precio_base - $product->descuento + $product->impuestos}}€
    <br>
    -----------------------------------------------------------------
    <br>
@endforeach
