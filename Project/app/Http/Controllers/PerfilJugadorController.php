<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilJugadorController extends Controller{
    public function index(){
        return view("modulos.perfiljugador.index");
    }
}