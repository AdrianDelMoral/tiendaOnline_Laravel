@extends('inicio')
@section('titulo', 'Home')
@section('cuerpo')
    {{-- @foreach ($products as $product)
        <a href="{{route('catalogo.show', $product)}}">{{$product->nombre}} </a>
        Precio: {{$product->precio_base}}€<br>
        Precio Total: {{$product->precio_base - $product->descuento + $product->impuestos}}€
        Categoria: {{$product->category->nombre}}<br>
        Descripcion: {{$product->descripcion}}<br>
        @forelse ($product->images as $imagen)
            <img src="{{asset("images/products-imgs/".$imagen->img_path)}}">
        @empty
        <p>No hay imagenes</p>
        @endforelse
    @endforeach --}}
    <section class="mt-5 py-5 text-center container">
        <div class="heroBackGround row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-dark">Titulo</h1>
                <p class="lead text-dark">Something short and leading about the collection below—its contents, the creator,
                    etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                <a href="#" class="btn btn-dark my-2 text-light">Main call to action</a>
                </p>
            </div>
        </div>
    </section>


    <main class="section-products">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h2>Pagina Principal</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Product -->
                @foreach ($products as $product)
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="single-product">
                            <div class="part-1 row justify-content-center align-items-center">
                                <div id="carruselCatalogo" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        @forelse ($product->images as $imagen)
                                            @if ($imagen->id == 1)
                                                <div class="carousel-item active">
                                                    <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100"
                                                        alt="...">
                                                </div>
                                            @endif
                                        @empty
                                            <p>No hay imagen del Producto</p>
                                        @endforelse
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carruselCatalogo" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carruselCatalogo" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="part-2">
                                <h1 class="product-title">
                                    <a href="{{ route('catalogo.show', $product) }}">{{ $product->nombre }}</a>
                                </h1>
                                <ul class="icons">
                                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                                    <li><a href="{{ route('catalogo.show', $product) }}"><i class="fas fa-eye"></i></a></li>
                                </ul>
                                <h2 class="product-old-price">{{ $product->precio_base }}€</h2>
                                <h2>{{ $product->precio_base - $product->descuento + $product->impuestos }}€</h2>
                                <br>
                                <h2 class="product-info">{{ $product->category->nombre }}</h2>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection
