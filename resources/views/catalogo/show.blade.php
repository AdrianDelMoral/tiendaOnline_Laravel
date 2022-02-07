

{{$product->nombre}}<br>
{{$product->descripcion}}<br>
{{$product->precio_base}}<br>
@foreach ($product->images as $imagen)
    <img src="{{asset("images/products-imgs/".$imagen->img_path)}}">
@endforeach

