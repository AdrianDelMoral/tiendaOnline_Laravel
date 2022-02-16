@foreach ($orders as $order)
    @if($loop->first)
        Aqui desplegable con {{$order->user->name}}<br>
    @endif
    <a href="{{route("pedido.show", $order)}}">Pedido del dia: {{$order->created_at}}</a><br>
@endforeach
