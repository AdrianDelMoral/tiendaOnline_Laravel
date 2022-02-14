@extends('admin')
@section('titulo', 'Dashboard - Inicio')
@section('cuerpo')
    {{-- <a href="{{ route('gestionar') }}">Gestion de productos<a>
         <a href="{{ route('gestionar-user') }}">Gestion de usuarios<a>
         <a href="">Gestion de stock y ventas<a> --}}
            <main class="mt-5" role="main">
                <article>
                  <div class="container">
                    <h1 class="display-3">Bienvenido/a</h1>
                    <p>Aquí contarás con las opciones necesarias para ver y editar tanto usuarios como productos que están en la base de datos.</p>
                  </div>
                </article>

                <article class="container">
                  <div class="row">
                    <div class="col-md-4">
                      <h2>Gestionar Productos</h2>
                      <p>En está sección tendrás las opciones para editar productos y ver que categorias e imagen tienen. </p>
                      <p><a class="btn btn-primary" href="{{ route('gestionar') }}" role="button">Acceder</a></p>
                    </div>
                    <div class="col-md-4">
                      <h2>Gestionar Usuarios</h2>
                      <p>En está sección tendrás las opciones para editar usuarios y ver que información e imagen tienen. </p>
                      <p><a class="btn btn-primary" href="{{ route('gestionar-user') }}" role="button">Acceder</a></p>
                    </div>
                    <div class="col-md-4 mb-5">
                      <h2>Gestión de stock y ventas</h2>
                      <p>En está sección no se que poner porque no se que va xd. </p>
                      <p><a class="btn btn-primary" href="{{ route('gestionar-stockyventas') }}" role="button">Acceder</a></p>
                    </div>
                    <hr>
                  </article>
                </div>

              </main>
    {{-- <main class="container mt-5">
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
    </main> --}}
@endsection
