<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create( ){

        $print= "h1";
        return view('users.login',compact("print"));
    }

    public function index(){
      $users= User::get();
      return view('users.login',compact("users"));

    }
}
