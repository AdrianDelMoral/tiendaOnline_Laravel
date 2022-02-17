{{-- @if($orders->isNotEmpty())
    <form action="{{route("ordenarfecha", $orders[0]->user_id)}}" method="get">
        @csrf
        @method('post')
        <input type="submit" value="Ordenar por fecha de pedido">
    </form>
@endif


@forelse ($orders as $order)
    @if($loop->first)
        USUARIO {{$order->user->name}}<br>
    @endif
    <a href="{{route("pedido.show", $order)}}">Pedido del dia: {{$order->created_at}}</a><br>
    @empty
    No hay datos
@endforelse --}}

@extends('ordersadmin')
@section('titulo', 'Ver Pedidos')
@section('cuerpo')
    <main class="container mTop">
        <section class="row">
            @if($orders->isNotEmpty())
                <form action="{{route("ordenarfecha", $orders[0]->user_id)}}" method="get">
                    @csrf
                    @method('post')
                    <input class="my-4 btn btn-primary" type="submit" value="Ordenar por fecha de pedido">
                </form>
            @endif
            <div class="table-responsive">
                <table class="table table-secondary table-sm">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Fecha y Hora</th>
                            <th scope="col">Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($orders as $order)
                            @if($loop->first)
                                <p class="h4">USUARIO: {{$order->user->name}}</p>
                            @endif

                            <tr>
                                <td>{{$order->created_at}}</td>
                                <td class="tablaEditar">
                                    <a class="btn btn-success" href="{{route("pedido.show", $order)}}"">
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
