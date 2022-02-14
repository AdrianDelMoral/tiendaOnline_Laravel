<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Dirección</title>
</head>

<body>
    <h1>{{ $address->calle }} (<a href="{{ route('direccion.edit', $address->id) }}"> editar Direccion </a>)</h1>

    Fecha: {{ $address->created_at }}
    <br><br>
    {{ $address->contenido }}
    <form action="{{ route('direccion.destroy', $address->id) }}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="eliminar">
    </form>
</body>

</html>
