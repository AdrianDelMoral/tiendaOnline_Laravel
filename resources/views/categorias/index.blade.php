<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Categorias</title>
    <script src="{{ asset('js/categorias/index.js') }}" defer></script>

</head>

<body>
    <div id="formularios">
        @foreach ($categorias as $categoria)
            <form method="post" class="categoriesSelector">
                @csrf
                @method('get')
                <button id="{{ $categoria->id }}">{{ $categoria->nombre }}</button>
            </form>
        @endforeach
    </div>
    <div id="contenido"></div>

</body>

</html>
