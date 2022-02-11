<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Dirección</title>
</head>
<body>
    <form action="/api/direccion" method="POST">
        @csrf
        @method('post')
        <input type="text" name="userId" value="{{$usuario}}" hidden>
        <input name="calle" id="calle" placeholder="calle">
        <input name="patio" id="patio" placeholder="patio">
        <input name="puerta" id="puerta" placeholder="puerta">
        <input name="numero" id="numero" placeholder="numero">
        <input name="cod_postal" id="cod_postal" placeholder="cod_postal">
        <input name="ciudad" id="ciudad" placeholder="ciudad">
        <input name="provincia" id="provincia" placeholder="provincia">
        <input name="pais" id="pais" placeholder="pais">
        <input type="submit" id="enviar">
    </form>
</body>
</html>
