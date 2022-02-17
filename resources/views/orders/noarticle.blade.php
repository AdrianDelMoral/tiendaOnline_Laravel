@extends('noarticle')
@section('titulo', 'Ningún Articulo Seleccionado')
@section('cuerpo')
    <main class="mTop text-center">
        <article class="my-5">
            <h1 class="fs-3">No tienes ningun articulo en la cesta, añade uno y vuelve a intentarlo<h1>
            <button class="btn btn-primary"><a class="text-light"href="{{route('catalogo.index')}}">Volver a la Página Principal</a></button>
        </article>
    </main>
@endsection
