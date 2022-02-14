@extends('showCategories')
@section('titulo', 'Categorias')
@section('cuerpo')
    {{-- cargar de 20 en 20 --}}

    <main class="section-products mt-5">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-md-8 col-lg-6">
                    <div class="header">
                        <h1>Categorias</h1>
                    </div>
                </div>
            </div>
            <div class="row">

                <div id="formularios">
                    @foreach ($categorias as $categoria)
                        <form method="post" class="categoriesSelector">
                            @csrf
                            @method('get')
                            <button id="{{ $categoria->id }}">{{ $categoria->nombre }}</button>
                        </form>
                    @endforeach
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="single-product m-3">
                        <div id="contenido">
                            {{-- Recrear el insertar imagen <3 --}}
                            {{--
                                <div class="border border-secondary rounded part-1 row justify-content-center align-items-center">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <a href="{{ route('catalogo.show', $product) }}">
                                                <!-- IMAGEN -->
                                                <img src="{{ 'storage/' . $imagen->img_path }}" class="d-block w-100" alt="...">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            --}}

                            {{-- PARTE 2 DE LA CARD --}}
                            {{--
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
                                                <a href="#"><i class="fas fa-shopping-cart"></i></a>
                                            </form>
                                        </li>
                                        <li class="icons_bg">
                                            <a href="{{ route('catalogo.show', $product) }}"><i
                                                    class="fas fa-eye"></i></a>
                                        </li>
                                    </ul>
                                    <h2 class="product-old-price">{{ $product->precio_base }}€</h2>
                                    <h2>{{ $product->precio_base - $product->descuento + $product->impuestos }}€</h2>
                                    <br>
                                    <h2 class="product-info">{{ $product->category->nombre }}</h2>
                                </div>
                            --}}
                        </div>
                    </div>
                </div>
                <button id="cargarMas" hidden>Cargar mas productos</button>
                <input type="text" id="currentpage" hidden>
                <input type="text" id="categoryId" hidden>
            </div>
        </div>
    </main>
@endsection
