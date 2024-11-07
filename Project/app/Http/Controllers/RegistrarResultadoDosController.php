<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegistrarResultadoDosController extends Controller{
    public function index(){
        return view("modulos.registrarresultadodos.index");
    }
}