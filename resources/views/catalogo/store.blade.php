<<<<<<< HEAD
@extends('addarticle')
@section('titulo', 'Crear Articulo')
@section('cuerpo')
    {{-- <form action="" method="POST" enctype="multipart/form-data" id="subirProd">
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Producto</title>
    <script src="{{asset("js/product/store.js")}}" defer></script>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data" id="subirProd">
        @csrf
>>>>>>> d501e7a508dca3df30a7e254232f5e776c5dced8
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
                                    <input type="text" class="form-control" placeholder="Impuestos" name="impuestos"
                                        id="impuestos">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Precio Base</label>
                                    <input type="text" class="form-control" placeholder="Precio Base" name="precio_base"
                                        id="precio_base">
                                </div>
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descuento</label>
                                    <input type="text" class="form-control" placeholder="Descuento" name="descuento"
                                        id="descuento">
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
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                                        @endforeach
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
                                <input class="form-control input_fotos" type="file" name="prod-img[]" id="prod-img"
                                    multiple>
                            </div>
                        </section>
                        <button type="submit" id="enviar" class="btnSubmit btn-light text-dark m-2">Submit</button>
                    </form>
                </div>
            </div>
        </article>
    </section>
@endsection
