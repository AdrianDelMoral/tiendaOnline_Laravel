@extends('noregistered')
@section('titulo', 'Usuario no Registrado')
@section('cuerpo')
<main class="mTop text-center">
    <article class="my-5">
        <h1 class="fs-3">No estas registrado, registate o iniciar session para completar el pedido.</h1>
        <button class="btn btn-primary"><a class="text-light" href="{{route('catalogo.index')}}">Volver a la Página Principal</a></button>
    </article>
</main>
@endsection
