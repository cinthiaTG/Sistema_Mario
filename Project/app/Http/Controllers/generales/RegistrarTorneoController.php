<?php

namespace App\Http\Controllers\generales;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrarTorneoController extends Controller{
    public function index(){
        return view("modulos.registrartorneo.index");
    }
}