<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Dirección</title>
</head>
<body>
    <form action="/api/direccion/{{$address->id}}" method="POST">
        @csrf
        @method('PUT')
        <input name="calle" id="calle" placeholder="calle" value="{{ $address->calle }}">
        <input name="patio" id="patio" placeholder="patio" value="{{ $address->patio }}">
        <input name="puerta" id="puerta" placeholder="puerta" value="{{ $address->puerta }}">
        <input name="numero" id="numero" placeholder="numero" value="{{ $address->numero }}">
        <input name="cod_postal" id="cod_postal" placeholder="cod_postal" value="{{ $address->cod_postal }}">
        <input name="ciudad" id="ciudad" placeholder="ciudad" value="{{ $address->ciudad }}">
        <input name="provincia" id="provincia" placeholder="provincia" value="{{ $address->provincia }}">
        <input name="pais" id="pais" placeholder="pais" value="{{ $address->pais }}">
        <input type="submit" id="enviar">
    </form>
</body>
</html>
