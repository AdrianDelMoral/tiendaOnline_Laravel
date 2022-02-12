@extends('category')
@section('titulo', 'Crear Categoria')
@section('cuerpo')
    <section class="container">
        <article>
            {{-- <form action="/api/agregarCategoria" method="POST">
                <input name="nombre" id="nombre" placeholder="nombre">
                <input name="descripcion" id="descripcion" placeholder="descripcion">
                <input type="submit" id="enviar">
            </form> --}}
            <form action="/api/agregarCategoria" method="POST">
                <!-- Name input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="Nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control">
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="textAreaExample">Descripción:</label>
                    <textarea name="descripcion" id="descripcion" class="form-control" id="textAreaExample" rows="4" placeholder="Descripcion"></textarea>
                  </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form5Example3" checked />
                    <label class="form-check-label" for="form5Example3">Estoy de acuerdo con crear una Categoria</label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Añadir</button>
            </form>
        </article>
    </section>

@endsection
