@foreach ($products as $product)
    {{$product->nombre}}<br>
    {{$product->precio_base}}€<br>
    {{$product->category->nombre}}
@endforeach
