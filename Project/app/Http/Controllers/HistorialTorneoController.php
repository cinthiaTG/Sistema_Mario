<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HistorialTorneoController extends Controller{
    public function index(){
        return view("modulos.historialtorneo.index");
    }
}