<form action="{{route('pedido.store')}}" method="POST">
    @csrf
    @method('POST')
    <select name="address_id">
        @foreach ($direcciones as $direccion)
            <option value="{{ $direccion->id }}">{{ "Calle: ".$direccion->calle." Patio:". $direccion->patio.
            " Puerta:".$direccion->puerta." Numero:".$direccion->numero." Cod Postal ".$direccion->cod_postal
            ." Ciudad ".$direccion->ciudad ." Provincia: ".$direccion->provincia." Pais: ".$direccion->pais}}</option>
        @endforeach
    </select><br>
    <input type="submit">
</form>

