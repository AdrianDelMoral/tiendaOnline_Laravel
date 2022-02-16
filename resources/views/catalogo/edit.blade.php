@extends('editproduct')
@section('titulo', 'Editar Producto')
@section('cuerpo')
    {{-- <form method="POST" id="editForm" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input type="text" value="{{ $product->id }}" id="prodId" hidden>
        <label for="nombre">Nombre:</label>
        <input name="nombre" id="nombre" value="{{ $product->nombre }}">

        <label for="descripcion">descripcion</label>
        <textarea name="descripcion" id="descripcion">{{ $product->descripcion }}</textarea>

        <label for="visibilidad">visibilidad:</label>
        <input name="visibilidad" id="visibilidad" type="number" value="{{ $product->visibilidad }}">

        <label for="category_id">Categoria: </label>
        <select class="form-control" name="category_id" id="category_id">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
            @endforeach
        </select>

        <label for="precio_base">Precio base:</label>
        <input name="precio_base" id="precio_base" type="text" value="{{ $product->precio_base }}">

        <label for="cantidad">Cantidad: </label>
        <input id="cantidad" name="cantidad" value="{{ $product->cantidad }}">

        <label for="impuestos">Impuestos:</label>
        <input name="impuestos" id="impuestos" type="text" value="{{ $product->impuestos }}">

        <label for="descuento">Descuento:</label>
        <input name="descuento" id="descuento" type="text" value="{{ $product->descuento }}">

        <input type="file" name="prod-img[]" id="prod-img" multiple>


        <input type="submit" id="actualizar" value="Actualizar Producto">
    </form>
    <form id="deleteProdForm" method="post">
        @csrf
        @method('DELETE')
        <button id="eliminarProd">Eliminar Producto</button>
    </form>
    <div id="galeria">
        @foreach ($product->images as $imagen)
            <form method="POST">
                @csrf
                @method('DELETE')
                <img src="{{ '/storage/' . $imagen->img_path }}"><img>
                <button id="{{ $imagen->id }}" class="deleteImg">x</button>
            </form>
        @endforeach
    </div> --}}
    <section class="mTop">
        <article>
            <div class="container mt-5 py-5 register-form bg-dark bg-gradient text-light">
                <div class="form">
                    <div class="note">
                        <!--  sm, md, lg, xl, and xxl -->
                        <h1 class="p-3 text-center text-light">Editar Producto</h1>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" id="editForm" class="form-content">
                        @csrf
                        @method('PUT')
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <div class="form-group m-2">
                                    <input type="text" value="{{ $product->id }}" id="prodId" hidden>
                                    <label for="nombre" class="form-label">Nombre</label>
                                    <input type="text" value="{{ $product->nombre }}" name="nombre" id="nombre"
                                        class="form-control" placeholder="Nombre" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Cantidad</label>
                                    <input type="text" name="cantidad" id="cantidad" class="form-control"
                                        placeholder="Cantidad" value="{{ $product->cantidad }}" required>
                                </div>

                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Impuestos</label>
                                    <input type="text" class="form-control" value="21" placeholder="Impuestos"
                                        name="impuestos" id="impuestos" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Precio Base</label>
                                    <input type="text" class="form-control" placeholder="Precio Base" name="precio_base"
                                        id="precio_base" value="{{ $product->precio_base }}" required>
                                </div>
                                <div class="form-group m-2">
                                    <label for="exampleFormControlTextarea1" class="form-label">Descuento</label>
                                    <input type="text" class="form-control" placeholder="Descuento" name="descuento"
                                        id="descuento"  value="{{ $product->descuento }}" required>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <div class="m-2">
                                    <label for="visibilidad" class="form-label">Visibilidad: 1: Visible / 2:
                                        Oculto:</label>
                                    <input type="number" class="form-control" name="visibilidad" id="visibilidad"
                                        value="{{ $product->visibilidad }}">
                                </div>
                            </div>
                            <div class="col-md-6 d-flex flex-column justify-content-center">
                                <label for="exampleFormControlTextarea1" class="form-label">Categoria</label>
                                <div class="m-2">
                                    <select class="form-group_ta form-select form-select-sm" name="category_id" id="category_id" aria-label=".form-select-sm example" required>
                                        <option disabled selected>Selecciona una categoria</option>
                                        @foreach ($categories as $cat)
                                            <option value="{{ $cat->id }}" {{$cat->id == $product->category_id?'selected':''}}>{{ $cat->nombre }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group m-2">
                                    <label for="descripción" class="form-label">Descripción</label>
                                    <textarea class="form-control" name="descripcion"
                                        placeholder="Añade una descripción del articulo detallada" id="descripcion" rows="5"
                                        required>{{ $product->descripcion }}</textarea>
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
                        <button type="submit" id="actualizar" class="btnSubmit btn-light text-dark m-2">Submit</button>
                    </form>
                    <div class="form-group m-6">
                        <form id="deleteProdForm" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" id="eliminarProd">Eliminar Producto</button>
                        </form>
                    </div>
                    <div class="row" id="galeria">
                        @foreach ($product->images as $imagen)
                            <!-- Single Image -->
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <form method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div class="single-product m-3">
                                        <div
                                            class=" border border-secondary rounded part-1 row justify-content-center align-items-center">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <a href="{{ route('catalogo.show', $product) }}">
                                                        {{-- <img src="{{ '/storage/' . $imagen->img_path }}"> --}}
                                                        <img src="{{ '/storage/' . $imagen->img_path }}"
                                                            class="d-block w-100" alt="...">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="part-2">
                                            <button id="{{ $imagen->id }}" class="btn btn-danger deleteImg">Borrar
                                                Imagen</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        @endforeach
                    </div>
                    {{-- <div id="galeria">
                        @foreach ($product->images as $imagen)
                            <form method="POST">
                                @csrf
                                @method('DELETE')
                                <img src="{{ '/storage/' . $imagen->img_path }}"><img>
                                <button id="{{ $imagen->id }}" class="btn btn-danger deleteImg">x</button>
                            </form>
                        @endforeach
                    </div> --}}
                </div>
            </div>
        </article>
    </section>
@endsection
