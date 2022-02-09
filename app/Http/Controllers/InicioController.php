<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;

class InicioController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view("home.inicio", compact("products"));
    }

}
