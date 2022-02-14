<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    public function gestionar(){
        //
        $users = User::get();
        return view("user.gestionar", compact("users"));
    }
}
