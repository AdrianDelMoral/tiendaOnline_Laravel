@extends('addarticle')
@section('titulo', 'Crear Producto')
@section('cuerpo')
    {{-- <form action="" method="POST" enctype="multipart/form-data" id="subirProd">
        <input name="nombre" id="nombre" placeholder="nombre">
        <input name="descripcion" id="descripcion" placeholder="descripcion">
        <input name="cantidad" id="cantidad" placeholder="cantidad">
        <select name="visibilidad" id="visibilidad">
            <option value="1" selected>Visible</option>
            <option value="2">Oculto</option>
        </select>
        <select class="form-control" name="category_id" id="category_id">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>

            @endforeach
        </select>
        <input name="precio_base" id="precio_base" placeholder="precio_base">
        <input name="impuestos" id="impuestos" placeholder="impuestos">
        <input name="descuento" id="descuento" placeholder="descuento">>
        <input type="file" name="prod-img[]" id="prod-img" multiple>
        <input type="submit" id="enviar">
    </form> --}}
    <section class="mTop">
        <article>
            <div class="container mt-5 py-5 register-form bg-dark bg-gradient text-light">
                <div class="form">
                    <div class="note">
                        <!--  sm, md, lg, xl, and xxl -->
                        <h1 class="p-3 text-center text-light">Nuevo Producto</h1>
                    </div>
                    <form {{-- action="/api/productos" --}} method="POST" enctype="multipart/form-data" id="subirProd" class="form-content">
                        @csrf
                        @method('POST')
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        placeholder="Nombre" value="{{old('nombre')}}" required>
                                        <p style="font-size: 12px; color: red;" id="hid_nombre"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Cantidad</label>
                                    <input type="number" name="cantidad" id="cantidad" class="form-control"
                                        placeholder="Cantidad" value="{{old('cantidad')}}" required>
                                        <p style="font-size: 12px; color: red;" id="hid_cantidad"></p>
                                </div>

                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Impuestos</label>
                                    <input type="number" class="form-control" value="{{old('impuestos')}}" placeholder="Impuestos" name="impuestos"
                                        id="impuestos" required>
                                        <p style="font-size: 12px; color: red;" id="hid_impuestos"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Precio Base</label>
                                    <input type="number" class="form-control" placeholder="Precio Base" name="precio_base"
                                        id="precio_base" value="{{old('precio_base')}}" required>
                                        <p style="font-size: 12px; color: red;" id="hid_precio_base"></p>
                                </div>
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descuento</label>
                                    <input type="number" class="form-control" placeholder="Descuento" name="descuento"
                                        id="descuento" value="{{old('descuentos')}}" required>
                                        <p style="font-size: 12px; color: red;" id="hid_descuento"></p>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <label for="exampleFormControlTextarea1" class="form-label">Visibilidad</label>
                                <div class="m-2">
                                    <select class="form-group_ta form-select form-select-sm" name="visibilidad"
                                        id="visibilidad" aria-label=".form-select-sm example" value="{{old('visibilidad')}}">
                                        <option disabled selected>Selecciona la Visibilidad del producto</option>
                                        <option value="1">Visible</option>
                                        <option value="2">Oculto</option>
                                    </select>
                                    <p style="font-size: 12px; color: red;" id="hid_visibilidad"></p>
                                </div>

                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                                <div class="m-2">
                                    <select class="form-group_ta form-select form-select-sm" name="category_id"
                                        id="category_id" aria-label=".form-select-sm example" value="{{old('category_id')}}">
                                        <option disabled selected>Selecciona una categoria</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <p style="font-size: 12px; color: red;" id="hid_category_id"></p>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" name="descripcion"
                                        placeholder="Añade una descripción del articulo detallada" id="descripcion"
                                        rows="5" value="{{old('descripcion')}}" required></textarea>
                                        <p style="font-size: 12px; color: red;" id="hid_descripcion"></p>
                                </div>
                            </div>
                        </div>
                        <section class="w-100 p-4 d-flex justify-content-center pb-4">
                            <div>
                                <label for="formFileMultiple" class="form-label">Seleccionar Imagenes</label>
                                <input class="form-control input_fotos" type="file" name="prod-img[]" id="prod-img" value="{{old('prod-img[]')}}"
                                    multiple required>
                                    <p style="font-size: 12px; color: red;" id="hid_prod_img"></p>
                            </div>
                        </section>
                        <button type="submit" id="enviar" class="btnSubmit btn-light text-dark m-2">Submit</button>
                    </form>
                </div>
            </div>
        </article>
    </section>
@endsection
