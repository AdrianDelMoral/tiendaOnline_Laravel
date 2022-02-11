<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Categoria</title>
    {{-- <script src="{{asset("js/category/store.js")}}" defer></script> --}}
</head>
<body>
    <form action="/api/agregarCategoria" method="POST">
        <input name="nombre" id="nombre" placeholder="nombre">
        <input name="descripcion" id="descripcion" placeholder="descripcion">
        <input type="submit" id="enviar">
    </form>
</body>
</html>

