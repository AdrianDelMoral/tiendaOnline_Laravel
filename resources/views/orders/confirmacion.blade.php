El pedido numero #{{$order->id}}
<br>

Con los siguientes articulos:
<br>
<br>

@foreach ($order->orderlines as $orderline)
    {{$orderline->product->nombre}}<br>
@endforeach
<br>
<br>

Ha sido creado con exito
