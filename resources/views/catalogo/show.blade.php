<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset("js/product/deshabilitar.js")}}" defer></script>
</head>
<body>
    <form method="post">
        @csrf
        @method("put")
        <input type="button" id="borrar" value="Ocultar Producto"><br>
        <input type="text" id="idProduct" value="{{$product->id}}" hidden>
    </form>

    <a href="/catalogo/{{$product->id}}/edit">Editar el producto</a><br>
    {{$product->nombre}}<br>
    {{$product->descripcion}}<br>
    {{$product->precio_base}}<br>
    @foreach ($product->images as $imagen)
        <img src="{{asset("storage/".$imagen->img_path)}}">
    @endforeach

</body>
</html>




