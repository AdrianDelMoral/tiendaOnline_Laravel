@extends('gestionar')
@section('titulo', 'Gestionar Producto')
@section('cuerpo')
    <main class="container mt-5">
        <section class="row">
            <div class="table-responsive">
                <table class="table table-secondary table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Imagen</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td class="text-center">
                                    <div>
                                        @foreach ($product->images as $image)
                                            @if ($loop->first)
                                                <img src="{{ '/storage/' . $image->img_path }}" alt="product" class="imgProduct">
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td>{{ $product->category->nombre }}</td>
                                <td>{{ $product->nombre }}</td>
                                <td>{{ $product->cantidad }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{ route('catalogo.edit', $product->id) }}">
                                        <span class="fa-solid fa-pen-to-square"></span>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            No hay productos que gestionar.
                        @endforelse
                    </tbody>
                </table>
            </div>
        </section>
    </main>

@endsection
