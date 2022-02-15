<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){

        if(!Auth::user()){
            abort(404);
        }
        if(Auth::user()->rol !== "administrador"){
            abort(404);
        }else{
            return view('admin.index');

        }
    }
}
