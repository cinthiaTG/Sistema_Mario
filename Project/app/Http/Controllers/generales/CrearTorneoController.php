<?php

namespace App\Http\Controllers\generales;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\Controller;

class CrearTorneoController extends Controller{
    public function index(){
        return view("modulos.registrartorneo.index");
    }
}
