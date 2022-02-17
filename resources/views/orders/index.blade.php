@extends('ordersfirst')
@section('titulo', 'Seleccionar dirección')
@section('cuerpo')
{{-- <select name="address_id" class="form-select" aria-label="Selector de direcciones">
    <option selected disabled>Seleccione una dirección</option>
    @foreach ($direcciones as $direccion)
        <option value="{{ $direccion->id }}" class="prueba">
            Calle: {{ $direccion->calle }} /
            Patio: {{ $direccion->patio }} /
            Puerta: {{ $direccion->puerta }} /
            Numero: {{ $direccion->numero }} /
            Cod Postal: {{ $direccion->cod_postal }} /
            Ciudad: {{ $direccion->ciudad }} /
            Provincia: {{ $direccion->provincia }} /
            Pais: {{ $direccion->pais }}
        </option>
    @endforeach
</select> --}}
    <main class="mTB container">
        <article class="bg-dark bg-gradient rounded">
            <h1 class="p-5 text-light">Seleccionar dirección de Envio</h1>
            <div>
                <form action="{{ route('pedido.store') }}" method="POST">
                    @csrf
                    @method('POST')

                    <div class="d-flex flex-row flex-wrap">
                        @foreach ($direcciones as $direccion)
                        <div class="card m-3 w_18">
                            <div class="card-body bg-dark">
                                <label class="text-light">
                                    Calle: {{ $direccion->calle }} <br>
                                    Patio: {{ $direccion->patio }} <br>
                                    Puerta: {{ $direccion->puerta }} <br>
                                    Numero: {{ $direccion->numero }} <br>
                                    Cod Postal: {{ $direccion->cod_postal }} <br>
                                    Ciudad: {{ $direccion->ciudad }} <br>
                                    Provincia: {{ $direccion->provincia }} <br>
                                    Pais: {{ $direccion->pais }}
                                </label>
                                <hr class="text-light">
                                <input type="radio" id="{{ $direccion->id }}" name="address_id" value="{{ $direccion->id }}">
                            </div>
                          </div>
                            <div>
                            </div>
                        @endforeach
                    </div>
                    <button class="m-3 btn btn-primary" type="submit" id="enviar">Siguiente</button>
                </form>
            </div>
        </article>
    </main>
@endsection
