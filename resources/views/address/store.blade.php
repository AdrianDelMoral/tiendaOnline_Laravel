<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Dirección</title>
    <script src="{{ asset('js/direccion/store.js') }}" defer></script>
</head>
<body>

    <form {{-- action="/api/direccion" --}}  method="POST" enctype="multipart/form-data" id="subirAddress">
        @csrf
        @method('post')
        <input type="text" name="userId" value="{{$usuario}}" hidden>
        <input name="calle" id="calle" placeholder="calle" value="{{old('calle')}}">
        <input name="patio" id="patio" placeholder="patio" value="{{old('patio')}}">
        <input name="puerta" id="puerta" placeholder="puerta" value="{{old('puerta')}}">
        <input name="numero" id="numero" placeholder="numero" value="{{old('numero')}}">
        <input name="cod_postal" id="cod_postal" placeholder="cod_postal" value="{{old('cod_postal')}}">
        <input name="ciudad" id="ciudad" placeholder="ciudad" value="{{old('ciudad')}}">
        <input name="provincia" id="provincia" placeholder="provincia" value="{{old('provincia')}}">
        <input name="pais" id="pais" placeholder="pais" value="{{old('pais')}}">
        <input type="submit" id="enviar">
    </form>
</body>
</html>
