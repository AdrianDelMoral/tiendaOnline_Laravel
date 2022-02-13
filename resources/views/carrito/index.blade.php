<h1>Carrito de compras</h1>
@forelse ($cartLines as $cartline)
<b>Producto:</b> {{$cartline->product->nombre}}
<b>Cantidad:</b> {{$cartline->cantidad}}<br>
@empty
El carrito está vacío
@endforelse
