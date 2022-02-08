@foreach ($products as $product)

    <a href="{{route('catalogo.show', $product)}}">{{$product->nombre}} </a>
    Precio: {{$product->precio_base}}€<br>
    Descripcion: {{$product->descripcion}}<br>
    Categoria: {{$product->category->nombre}}<br>
    Precio Total: {{$product->precio_base - $product->descuento + $product->impuestos}}€
    @forelse ($product->images as $imagen)
        <img src="{{asset("storage/".$imagen->img_path)}}">
    @empty
        <p>No hay imagenes</p>
    @endforelse
    <br>
    -----------------------------------------------------------------
    <br>
@endforeach
