<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Product;

class InicioController extends Controller
{
    public function index()
    {
        $user_id = 0;
        if(Auth::user()){
            $user_id = Auth::user()->id;
        }
        $products = Product::where("visibilidad",1)->orderBy("created_at", 'desc')->get();
        return view("catalogo.inicio", compact("products", "user_id"));
    }

}
