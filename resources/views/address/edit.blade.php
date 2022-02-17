@extends('editaddress')
@section('titulo', 'Editar Dirección')
@section('cuerpo')
{{-- <form action="/api/direccion/{{$address->id}}" method="POST">
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
</form> --}}
    <section class="margenTop mb-5">
        <article>
            <div class="container py-5 register-form bg-dark bg-gradient text-light">
                <div class="form">
                    <div class="note">
                        <h1 class="p-3 text-center text-light">Editar Dirección</h1>
                    </div>
                    <form {{-- action="/api/direccion" --}}  method="POST" enctype="multipart/form-data" id="subirAddress">
                        @csrf
                        @method('put')
                        <input type="text" id="addressId" hidden value="{{$address->id}}">
                        <input type="text" class="form-control" name="userId" value="{{ $usuario }}" hidden>
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                        <label class="form-label" for="calle">Calle</label>
                                        <input type="text" name="calle" id="calle" placeholder="Calle" class="form-control" value="{{ $address->calle }}">
                                        <p id="hid-calle" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <!-- Email input -->
                                    <div class="form-outline">
                                        <label class="form-label" for="patio">Patio</label>
                                        <input type="number" name="patio" id="patio" placeholder="Patio" class="form-control" value="{{ $address->patio }}">
                                        <p id="hid-patio" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="puerta">Puerta</label>
                                        <input type="text" name="puerta" id="puerta" placeholder="Puerta" class="form-control" value="{{ $address->puerta }}">
                                        <p id="hid-puerta" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="numero">Numero</label>
                                        <input type="number" name="numero" id="numero" placeholder="Numero" class="form-control" value="{{ $address->numero }}">
                                        <p id="hid-numero" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="cod_postal">Codigo Postal</label>
                                        <input type="number" name="cod_postal" id="cod_postal" placeholder="Codigo Postal"  class="form-control" value="{{ $address->cod_postal }}">
                                        <p id="hid-cp" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="ciudad">Ciudad</label>
                                        <input type="text" name="ciudad" id="ciudad" placeholder="Ciudad" class="form-control" value="{{ $address->ciudad }}">
                                        <p id="hid-ciudad" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="provincia">Provincia</label>
                                        <input type="text" name="provincia" id="provincia" placeholder="Provincia" class="form-control" value="{{ $address->provincia }}">
                                        <p id="hid-provincia" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-outline">
                                        <label class="form-label" for="pais">Pais</label>
                                        <input type="text" name="pais" id="pais" placeholder="Pais" class="form-control" value="{{ $address->pais }}">
                                        <p id="hid-pais" style="font-size: 11px; color: red;"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row mx-5 mt-5">
                                <button type="submit" id="enviar" class="btn btn-primary  mt-4">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>

@endsection
