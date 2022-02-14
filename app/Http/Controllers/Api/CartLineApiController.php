<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\CartLine;
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
        $cartline = new CartLine();
        $cartline-> user_id = $request->get("user_id");
        $cartline -> product_id = $request->get("product_id");
        $cartline -> cantidad = 1;
        $cartline->save();
        return response()->json($cartline, 201);
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
