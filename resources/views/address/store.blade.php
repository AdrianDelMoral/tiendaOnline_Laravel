<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Dirección</title>
    <script src="{{ asset('js/direccion/store.js') }}" defer></script>
    <style>
        p {
            font-size: 11px;
            color: red;
        }
    </style>
</head>
<body>

    <form {{-- action="/api/direccion" --}}  method="POST" enctype="multipart/form-data" id="subirAddress">
        @csrf
        @method('post')
        <input type="text" name="userId" value="{{$usuario}}" hidden>
        <div>Calle</div>
        <input name="calle" id="calle" placeholder="calle" value="{{old('calle')}}" required>
        <p id="hid-calle"></p>
        <div>Patio</div>
        <input name="patio" id="patio" placeholder="patio" value="{{old('patio')}}" required>
        <p id="hid-patio"></p>
        <div>Puerta</div>
        <input name="puerta" id="puerta" placeholder="puerta" value="{{old('puerta')}}" required>
        <p id="hid-puerta"></p>
        <div>Numero</div>
        <input name="numero" id="numero" placeholder="numero" value="{{old('numero')}}" required>
        <p id="hid-numero"></p>
        <div>Código Postal</div>
        <input name="cod_postal" id="cod_postal" placeholder="cod_postal" value="{{old('cod_postal')}}" required>
        <p id="hid-cp"></p>
        <div>Ciudad</div>
        <input name="ciudad" id="ciudad" placeholder="ciudad" value="{{old('ciudad')}}" required>
        <p id="hid-ciudad"></p>
        <div>Provincia</div>
        <input name="provincia" id="provincia" placeholder="provincia" value="{{old('provincia')}}" required>
        <p id="hid-provincia"></p>
        <div>Pais</div>
        <input name="pais" id="pais" placeholder="pais" value="{{old('pais')}}" required>
        <p id="hid-pais"></p>
        <input type="submit" id="enviar">
    </form>

</body>
</html>
