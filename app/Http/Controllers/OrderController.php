<?php

namespace App\Http\Controllers;

use App\Models\address;
use App\Models\CartLine;
use App\Models\Product;

use App\Models\Order;
use App\Models\Orderline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $direcciones = Address::where("user_id", Auth::user()->id)->get();
        return view("orders.index", compact("direcciones"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->address_id = $request->get("address_id");
        $order->save();
        //return response()->json($order->id, 201);

        $productos = CartLine::where("user_id", Auth::user()->id)->get();
        //return dd($productos);
        // foreach ($productos as $producto) {
        //     return dd($producto['id']);
        // }
        foreach ($productos as $producto) {
            $lineaPedido = new Orderline();
            $lineaPedido -> order_id = $order->id;
            $lineaPedido -> cantidad = $producto['cantidad'];
            $lineaPedido -> product_id = $producto['product_id'];
            $lineaPedido -> precio = Product::where("id", $producto['product_id'])->first()->precio_base;
            $lineaPedido ->descuento  = 0;
            $lineaPedido->save();

        }
        return view("orders.confirmacion", compact("order"));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
