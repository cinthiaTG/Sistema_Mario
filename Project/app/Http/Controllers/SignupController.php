<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller{
    public function index(){
        return view("modulos.signup.index");
    }
}