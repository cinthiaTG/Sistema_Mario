<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditarJugadorController extends Controller{
    public function index(){
        return view("modulos.editarjugador.index");
    }
}
