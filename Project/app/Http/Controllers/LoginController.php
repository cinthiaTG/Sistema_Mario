<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller{
    public function login(){
        return view("login");
    }
    public function perfil(){
        return view("perfil");
    }
}