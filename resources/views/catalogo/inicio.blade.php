@extends('catalogo')
@section('titulo', 'Inicio - ComponentesPC')
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
                <h1 class="fw-dark">Componentes PC</h1>
                <p class="lead text-dark">Tienda especializada en componentes de pc, electrodomésticos y otro tipo de productos tecnológicos. Envíos a toda la peninsula y Canarias</p>
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
                        <div class="single-product m-3">
                            <div class=" border border-secondary rounded part-1 row justify-content-center align-items-center">
                                @forelse ($product->images as $imagen)
                                    <div class="carousel-inner">
                                        @if ($loop->first)
                                            <div class="carousel-item active">
                                                <a href="{{ route('catalogo.show', $product) }}">
                                                    <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100" alt="...">
                                                </a>
                                            </div>
                                        @endif
                                    </div>
                                @empty
                                    <p>No hay imagen del Producto</p>
                                @endforelse
                            </div>
                            <div class="part-2">
                                <h1 class="product-title">
                                    <a href="{{ route('catalogo.show', $product) }}">{{ $product->nombre }}</a>
                                </h1>
                                <ul class="icons">
                                    <li class="icons_bg">
                                        <form action="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="text" name="user_id" value="{{ $user_id }}" hidden>
                                            <input type="text" id="product_id" name="product_id"
                                                value="{{ $product->id }}" hidden>
                                            <a href="#"><span class="fas fa-shopping-cart"></span></a>
                                        </form>
                                    </li>
                                    <li class="icons_bg">
                                        <a href="{{ route('catalogo.show', $product) }}"><span class="fas fa-eye"></span></a>
                                    </li>
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
