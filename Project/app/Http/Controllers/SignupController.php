<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SignupController extends Controller{
    public function index(){
        return view("modulos.signup.index");
    }
    public function store(){
        //aqui va a guardar el nuevo perfil y me falta otro que valide que no exista ese perfil pero no me acuerdo como se hace eso
    }
}