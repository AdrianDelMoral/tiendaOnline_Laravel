<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @forelse ($products as $product)
        {{ $product->nombre }}
        @foreach ($product->images as $image)
        @if($loop->first)
            <img src="{{'/storage/'. $image->img_path }}">
        @endif

        @endforeach
        <a href="{{route("catalogo.edit", $product->id)}}">editar producto</a>
    @empty
        No hay productos que gestionar.
    @endforelse
    <br><br>
</body>

</html>
