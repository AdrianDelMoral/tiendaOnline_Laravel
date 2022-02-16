<form action="{{route("ordenarfecha", $orders[0]->user_id)}}" method="get">
    @csrf
    @method('post')
    <input type="submit" value="Ordenar por fecha de pedido">
</form>

@foreach ($orders as $order)
    @if($loop->first)
        USUARIO {{$order->user->name}}<br>
    @endif
    <a href="{{route("pedido.show", $order)}}">Pedido del dia: {{$order->created_at}}</a><br>
@endforeach
