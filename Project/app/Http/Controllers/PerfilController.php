<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PerfilController extends Controller{
    public function index(){
        return view("views.perfil");
    }
}