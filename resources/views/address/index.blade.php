<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Dirección</title>
</head>
<body>
    <h4>Aqui se listan todas las Calles</h4>

    @forelse ($addresses as $address)
    @if ($address->user_id === $usuario)
    <h1>{{ $address->calle }} (<a href="{{ route('direccion.edit', $address->id) }}"> editar Direccion </a>)</h1>
    Fecha: {{ $address->created_at }}
        <form action="{{ route('direccion.destroy', $address->id) }}" method="post">
            @csrf
            @method('delete')
            <input type="submit" value="eliminar">
        </form>

    @endif
    @empty
        No tienes ninguna dirección, necesitas crear una para poder editarla.
        <div class="col-span-6 sm:col-span-4">
            <a id="address" type="button" href="{{ route('direccion.create') }}" style="background-color: white; border-color: grey;">Crear dirección</a>
        </div>
    @endforelse

</body>
</html>
