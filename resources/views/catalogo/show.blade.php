@extends('showProduct')
@section('titulo', `{{ $product->nombre }}`)
@section('cuerpo')
    <main class="container">
        <section>
            <div class="row">
                <div class="col-md-5">
                    <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                        <div class="carousel-inner">
                            @forelse ($product->images as $imagen)
                                @if ($imagen->id == 1)
                                    <div class="carousel-item active">
                                        <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100" alt="...">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100" alt="...">
                                    </div>
                                @endif
                            @empty
                                <p>No hay imagen del Producto</p>
                            @endforelse
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span>Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span">Next</span>
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
                    <label>Quantity:</label>
                    <input type="text" value="1" class="input_quantity" max="99">
                    <button type="button" class="btn btn-default cart">Add to cart</button>
                    {{-- {{ $product->descripcion }}<br>
                    {{ $product->precio_base }}<br>
                    @foreach ($product->images as $imagen)
                        <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100" alt="...">
                    @endforeach --}}
                </div>
            </div>
        </section>
    </main>

@endsection
