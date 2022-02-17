@extends('showorder')
@section('titulo', 'Ver Pedido')
@section('cuerpo')
    {{-- /pedido/1(numero de pedido al finalizar) --}}
    <main class="container mb-5 mTop">
        <article>
            <h1 class="h3 text-center">Numero de pedido: {{ $order->id }}</h1>
            <div class="col">
                <div class="row-md-5 card m-3 rounded tamanyo">
                    <div class="card-body bg-dark text-light">
                        <p class="h5"><ins>Dirección:</ins></p>
                        <p class="ms-3 mt-3">
                            Calle: {{ $order->address->calle }} <br>
                            Patio: {{ $order->address->patio }} <br>
                            Puerta: {{ $order->address->puerta }} <br>
                            Numero: {{ $order->address->numero }} <br>
                            CodPostal: {{ $order->address->cod_postal }} <br>
                            Ciudad: {{ $order->address->ciudad }} <br>
                            Provincia: {{ $order->address->provincia }} <br>
                            Pais: {{ $order->address->pais }} <br>
                        </p>
                    </div>
                </div>
                <div class="m-3 mt-5">
                    <p class="h5 mt-4">Productos Comprados:</p>
                    @php
                        $total = 0;
                    @endphp
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <th>Nombre</th>
                                <th>Cantidad</th>
                                <th>Precio Total</th>
                            </tr>
                        </thead>
                        <tbody >
                            @foreach ($order->orderlines as $order)
                                @php
                                    $total += $order->precio;
                                @endphp
                                <tr class="">
                                    <td><p class="text-sm-center">{{ $order->product->nombre }}</td>
                                    <td><p class="text-sm-center">{{ $order->cantidad }}</p></td>
                                    <td><p class="text-sm-center">{{ $order->precio }}€</p></td>
                                </tr>

                            @endforeach
                        </tbody>
                    </table>
                    <p class="h5 mt-5">Precio total: {{ $total . '€' }}</p>
                </div>
            </div>
        </article>
    </main>
@endsection
