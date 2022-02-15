<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function gestionar()
    {
        //
        if (!Auth::user()) {
            abort(404);
        }
        if (Auth::user()->rol !== "administrador") {
            abort(404);
        } else {
            $users = User::get();
            return view("user.gestionar", compact("users"));
        }
    }
}
