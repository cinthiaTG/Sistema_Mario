<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrarCanchaController extends Controller{
    public function index(){
        return view("modulos.registrarcancha.index");
    }
}
