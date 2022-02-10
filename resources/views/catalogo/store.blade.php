@extends('addarticle')
@section('titulo', 'Crear Articulo')
@section('cuerpo')
    {{-- <form action="" method="POST" enctype="multipart/form-data" id="subirProd">
        <input name="nombre" id="nombre" placeholder="nombre">
        <input name="descripcion" id="descripcion" placeholder="descripcion">
        <select name="visibilidad" id="visibilidad">
            <option value="1" selected>Visible</option>
            <option value="2">Oculto</option>
        </select>
        <input name="category_id" id="category_id" placeholder="category_id">
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
                        <h1 class="p-3 text-light">Nuevo Producto</h1>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" id="subirProd" class="form-content">
                        <div class="row mb-5">
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Nombre</label>
                                    <input type="text" name="nombre" id="nombre" class="form-control"
                                        placeholder="Nombre">
                                </div>

                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Impuestos</label>
                                    <input type="text" class="form-control" placeholder="Impuestos" name="impuestos" id="impuestos">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Precio Base</label>
                                    <input type="text" class="form-control" placeholder="Precio Base" name="precio_base" id="precio_base">
                                </div>
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descuento</label>
                                    <input type="text" class="form-control" placeholder="Descuento" name="descuento" id="descuento">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <label for="exampleFormControlTextarea1" class="form-label">Visibilidad</label>
                                <div class="m-2">
                                    <select class="form-group_ta form-select form-select-sm" name="visibilidad"
                                        id="visibilidad" aria-label=".form-select-sm example">
                                        <option disabled selected>Selecciona la Visibilidad del producto</option>
                                        <option value="1">Visible</option>
                                        <option value="2">Oculto</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                                <div class="m-2">
                                    <select class="form-group_ta form-select form-select-sm" name="category_id"
                                        id="category_id" aria-label=".form-select-sm example">
                                        <option disabled selected>Selecciona una categoria</option>
                                        <option value="1">Electrodomesticos</option>
                                        {{-- <option value="2">Ordenadores</option>
                                        <option value="3">Moviles</option> --}}
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descripción</label>
                                    <textarea class="form-control" name="descripcion"
                                        placeholder="Añade una descripción del articulo detallada" id="descripcion"
                                        rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <section class="w-100 p-4 d-flex justify-content-center pb-4">
                            <div>
                                <label for="formFileMultiple" class="form-label">Seleccionar Imagenes</label>
                                <input class="form-control input_fotos" type="file" name="prod-img[]" id="prod-img" multiple>
                            </div>
                        </section>
                        <button type="submit" id="enviar" class="btnSubmit btn-light text-dark m-2">Submit</button>
                    </form>
                </div>
            </div>
        </article>
    </section>
@endsection
