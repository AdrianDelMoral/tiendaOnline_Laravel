@extends('showProduct')
@section('titulo', `{{ $product->nombre }}`)
@section('cuerpo')
    {{-- {{ $product->descripcion }}<br>
    {{ $product->precio_base }}<br>
    @foreach ($product->images as $imagen)
        <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100" alt="...">
    @endforeach --}}
    <main class="container">
        <section>
            <div class="row">
                <div class="col-md-5">
                    <div id="{{ $product->nombre }}" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            @foreach ($product->images as $imagen)
                                @if ($loop->first)
                                    <div class="carousel-item active">
                                        <img src="{{ asset('storage/' . $imagen->img_path) }}" class="d-block w-100"
                                            alt="{{ $product->nombre }}">
                                    </div>
                                @endif
                                <div class="carousel-item">
                                    <img src="{{ asset('storage/' . $imagen->img_path) }}" class="d-block w-100"
                                        alt="{{ $product->nombre }}">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#{{ $product->nombre }}"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#{{ $product->nombre }}"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-7">
                    <p class="newarrival text-center"></p>
                    <h2>{{ $product->nombre }}</h2>
                    <p class="newarrival text-center">Codigo: 23123-12312-123</p>
                    <i class="fa-solid fa-star stars"></i>
                    <p class="price">{{ $product->precio_base }}€</p>
                    <p><strong>Availability:</strong> Yes</p>
                    <p><strong>Descripción:</strong>{{ $product->descripcion }}</p>
                    <p><strong>Brand:</strong>New</p>
                    <label>Cantidad:</label>
                    <input type="text" value="1" class="input_quantity" max="99">
                    <button type="button" class="btn btn-danger cart">Add to cart</button>
                </div>
            </div>
        </section>
        <section>
            <div>
                <div class="d-flex justify-content-center row">
                    <div class="col-md-2">
                        <form method="post" id="formDisable">
                            @csrf
                            @method("put")
                            <input type="button" id="borrar" value="Ocultar Producto" class="btn btn-dark text-light">
                            <input type="text" id="idProduct" value="{{ $product->id }}" hidden>
                        </form>
                    </div>
                    <div class="col-md-2">
                        <a href="/catalogo/{{ $product->id }}/edit" class="btn btn-dark text-light">Editar el
                            producto</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
