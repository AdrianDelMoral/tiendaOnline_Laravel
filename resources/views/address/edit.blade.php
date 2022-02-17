<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Dirección</title>
    <script src="{{ asset('js/direccion/edit.js') }}" defer></script>

</head>
<body>
    <form {{-- action="/api/direccion/{{$address->id}}" --}} method="POST" enctype="multipart/form-data" id="editarAddress">
        @csrf
        @method('PUT')
        <input type="text" value="{{$address->id}}" id="addressId" hidden>
        <div>Calle</div>
        <input name="calle" id="calle" placeholder="calle" value="{{ $address->calle }}">
        <p id="hid-calle" style="font-size: 11px; color: red;"></p>
        <div>Patio</div>
        <input name="patio" id="patio" placeholder="patio" value="{{ $address->patio }}">
        <p id="hid-patio" style="font-size: 11px; color: red;"></p>
        <div>Puerta</div>
        <input name="puerta" id="puerta" placeholder="puerta" value="{{ $address->puerta }}">
        <p id="hid-puerta" style="font-size: 11px; color: red;"></p>
        <div>Numero</div>
        <input name="numero" id="numero" placeholder="numero" value="{{ $address->numero }}">
        <p id="hid-numero" style="font-size: 11px; color: red;"></p>
        <div>Código Postal</div>
        <input name="cod_postal" id="cod_postal" placeholder="cod_postal" value="{{ $address->cod_postal }}">
        <p id="hid-cp" style="font-size: 11px; color: red;"></p>
        <div>Ciudad</div>
        <input name="ciudad" id="ciudad" placeholder="ciudad" value="{{ $address->ciudad }}">
        <p id="hid-ciudad" style="font-size: 11px; color: red;"></p>
        <div>Provincia</div>
        <input name="provincia" id="provincia" placeholder="provincia" value="{{ $address->provincia }}">
        <p id="hid-provincia" style="font-size: 11px; color: red;"></p>
        <div>Pais</div>
        <input name="pais" id="pais" placeholder="pais" value="{{ $address->pais }}">
        <p id="hid-pais" style="font-size: 11px; color: red;"></p>
        <input type="submit" id="enviar">
    </form>
</body>
</html>
