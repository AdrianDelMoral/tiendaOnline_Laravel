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
            <div id="formularios">
                <div class="d-flex w-100 flex-nowrap">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Seleccionar Categoria
                        </button>
                        <ul class="dropdown-menu text-center" aria-labelledby="dropdownMenuButton1">
                            @foreach ($categorias as $categoria)
                                <form method="post" class="categoriesSelector">
                                    @csrf
                                    @method('get')
                                    <button class="btn my-2 w-100 btn-danger" id="{{ $categoria->id }}">{{ $categoria->nombre }}</button>
                                </form>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="contenido">

                </div>
                <button id="cargarMas" hidden>Cargar mas productos</button>
                <input type="text" id="currentpage" hidden>
                <input type="text" id="categoryId" hidden>
            </div>
        </div>
    </main>
@endsection
