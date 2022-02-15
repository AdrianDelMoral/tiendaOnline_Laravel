@extends('carrito')
@section('titulo', 'Carrito de compra')
@section('cuerpo')
{{-- <h1>Carrito de compras</h1>
@forelse ($cartLines as $cartline)
<b>Producto:</b> {{$cartline->product->nombre}}
<b>Cantidad:</b> {{$cartline->cantidad}}<br>
@empty
El carrito está vacío
@endforelse
 --}}
 <main class="container">
    <div class="col-12">
        <h1 class="my-5"><strong>numero Articulos</strong> Artículos en <strong>tu cesta</strong></h1>

        <div class="container">
            <div class="col-md-12">
                <table class="table table-bordered border-dark">
                    <thead class="table-secondary fw-bold border-dark">
                        <tr>
                            <td class="text-center">Nombre</th>
                            <td class="text-center">Precio</th>
                            <td class="text-center">Cantidad</th>
                            <td class="text-center">Total</th>
                            <td class="text-center">Quitar de lista</th>
                        </tr>
                    </thead>
                    <tbody class="border-dark">
                        @forelse ($cartLines as $cartline)
                        <tr>
                            <td class="text-center">
                                <div>
                                    {{-- img de la imagen aquí recibiendola de la bbdd --}}
                                    <img src="/storage/{{$cartline->product->images[0]->img_path}}"
                                        alt="{{$cartline->product->nombre}}" class="imgProduct">
                                    <p>{{$cartline->product->nombre}}</p>
                                    {{-- {{producto.nombre}} --}}
                                </div>
                            </td>
                            <td class="text-center mt-7">
                                <p>{{$cartline->product->precio_base}}€</p>
                                {{-- {{producto.precio}} --}}
                            </td>
                            <td class="text-center mt-7">
                                <p>{{$cartline->cantidad}} <strong>Uds</strong></p>
                                {{-- {{producto.cantidad}} --}}
                            </td>
                            <td class="text-center mt-7">
                                <p>{{($cartline->product->precio_base)*($cartline->cantidad)." €"}}</p>
                                {{-- {{producto.total}} --}}
                            </td>
                            <td class="text-center">
                                <form method="POST" class="mt-5">
                                    @csrf
                                    @method('DELETE')
                                    <input type="text" id="cartId" value="{{$cartline->id}}" hidden>
                                    <button type="submit" id="deletebtn" class="btn btn-danger"><span class="fa fa-trash"></span></button>
                                </form>
                            </td>
                        </tr>
                        @empty
                            El carrito está vacío
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            <div class=" my-5">
                <div class="row">
                    <div class="col-lg-2 col-xs-1">
                        <p class="h3">Total Pedido: </p>
                    </div>
                    <div class="col-lg-2 col-xs-1">
                        @php
                            $cantidad = 0;
                        @endphp
                        @forelse ($cartLines as $cartline)
                        @php
                            $cantidad += ($cartline->product->precio_base)*($cartline->cantidad)
                        @endphp
                        @empty
                        @endforelse
                        @php
                            echo '<p class="h3">'.$cantidad.'€</p>';
                        @endphp
                        {{-- <p class="h3">1.007,98€</p> --}}
                    </div>
                </div>
            </div>
        </div>
        <form class="mb-4" method="POST" id="vaciarCesta">
            <a href={{route("pedido.index")}} type="submit" class="btn btn-success">Realizar Pedido</a>
            <a class="btn btn-danger"><span class="fa fa-trash"></span> Vaciar cesta</a>
        </form>
    </div>
    </div>
</main>
@endsection
