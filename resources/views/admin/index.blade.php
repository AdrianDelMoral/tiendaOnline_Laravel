@extends('admin')
@section('titulo', 'Dashboard - Inicio')
@section('cuerpo')
    {{-- <a href="{{ route('gestionar') }}">Gestion de productos<a>
         <a href="{{ route('gestionar-user') }}">Gestion de usuarios<a>
         <a href="">Gestion de stock y ventas<a> --}}
    <main class="container mt-5">
        <section class="row">
            <div class="table-responsive">
                <table class="table table-secondary table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Imagen</th>
                            <th scope="col">Categoria</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Header 3</th>
                            <th scope="col">Header 4</th>
                        </tr>
                    </thead>
                    <tbody>
                        <p>bucle</p>
                        <tr>
                            <td>1,001</td>
                            <td>random</td>
                            <td>data</td>
                            <td>placeholder</td>
                            <td>text</td>
                        </tr>
                        <p>FIN bucle</p>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
@endsection
