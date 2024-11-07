<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CrearTorneoController extends Controller{
    public function index(){
        return view("modulos.crearTorneo.index");
    }
}