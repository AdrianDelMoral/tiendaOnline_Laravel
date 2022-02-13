<?php

namespace App\Http\Controllers;

use App\Models\CartLine;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CartLineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $usuario = 0;
        if (Auth::user()) {
            $usuario = Auth::user()->id;
        }
        $cartLines = CartLine::where("user_id", $usuario)->get();
        return view("carrito.index", compact("cartLines"));
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CartLine  $cartLine
     * @return \Illuminate\Http\Response
     */
    public function edit(CartLine $cartLine)
    {
        //
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
    }
}
