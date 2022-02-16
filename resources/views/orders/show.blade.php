{{"Calle: ".$order->address->calle." Patio:". $order->address->patio.
" Puerta:".$order->address->puerta." Numero:".$order->address->numero." Cod Postal ".$order->address->cod_postal
." Ciudad ".$order->address->ciudad ." Provincia: ".$order->address->provincia." Pais: ".$order->address->pais}}
<br><br>

Numero de pedido: {{$order->id}}
<br><br>

Productos Comprados:<br>
@php
    $total = 0;
@endphp
@foreach ($order->orderlines as $order)
@php
    $total += $order->precio;
@endphp
{{$order->product->nombre}} x {{$order->cantidad}} - {{$order->precio}}€<br>
@endforeach
<br><br>
Precio total:
{{$total."€"}}
