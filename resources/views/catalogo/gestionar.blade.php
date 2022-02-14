@extends('gestionar')
@section('titulo', 'Editar Producto')
@section('cuerpo')
    @forelse ($products as $product)
        {{ $product->nombre }}
        @foreach ($product->images as $image)
            @if ($loop->first)
                <img src="{{ '/storage/' . $image->img_path }}">
            @endif
        @endforeach
        <a href="{{ route('catalogo.edit', $product->id) }}">editar producto</a>
    @empty
        No hay productos que gestionar.
    @endforelse
    <br><br>
@endsection
