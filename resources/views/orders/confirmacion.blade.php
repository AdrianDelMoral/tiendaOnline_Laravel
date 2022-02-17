{{--  --}}
@extends('confirmacionorder')
@section('titulo', 'Pedido Realizado')
@section('cuerpo')
    <main class="container mb-5" style="margin-top: 10rem">
        <article>
            <h1 class="h3 mb-4">Numero de pedido: {{ $order->id }}</h1>

            <p class="h5">Con los siguientes articulos:<p>
            <table class="table">
                <thead class="table-dark">
                    <th scope="col"><p>Nombre del Articulo</p></th>
                </thead>
                <tbody>
                    @foreach ($order->orderlines as $orderline)
                    <tr>
                        <td>
                            <p>{{ $orderline->product->nombre }}</p>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <p class="h5 mt-4">Ha sido creado con exito</p>

        </article>
    </main>
@endsection
