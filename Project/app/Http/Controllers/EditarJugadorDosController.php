<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditarJugadorDosController extends Controller{
    public function index(){
        return view("modulos.editarjugadordos.index");
    }
}