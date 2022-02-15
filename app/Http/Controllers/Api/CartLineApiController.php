<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartLine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartLineApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $carrito = CartLine::get();
        return response()->json($carrito);
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

        $linea = CartLine::where("product_id", $request->get("product_id"))->where("user_id", $request->get("user_id"))->first();

        if($linea){
            $this->updateCantidad($request->get("cantidad") ? $request->get("cantidad") : 1, $linea);
            return response()->json($linea, 201);
        }
        $cartline = new CartLine();
        $cartline-> user_id = $request->get("user_id");
        $cartline -> product_id = $request->get("product_id");
        $cartline -> cantidad = $request->get("cantidad") ? $request->get("cantidad") : 1;
        $cartline->save();
        return response()->json($cartline, 201);
    }

    public function updateCantidad(int $cantidadNum, CartLine $cartLine){
        $cartLine -> cantidad += $cantidadNum;
        $cartLine->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CartLine  $cartLine
     * @return \Illuminate\Http\Response
     */
    public function show(CartLine $cartLine)
    {
        //
        return response($cartLine);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CartLine  $cartLine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CartLine $cartLine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CartLine  $cartLine
     * @return \Illuminate\Http\Response
     */
    public function destroy(CartLine $cartLine)
    {
        //
        $cartLine->delete();
        return response()->json(null, 204);
    }
}
