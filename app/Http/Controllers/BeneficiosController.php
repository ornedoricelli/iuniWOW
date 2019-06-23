<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class BeneficiosController extends Controller
{
    public function showBeneficios(){
      return view('beneficios');
    }

    public function showEventos(){
      return view('eventos');
    }

    public function showCupon(){
      $usuario = User::find(1);
      $usuario->puntos = ($usuario->puntos + 75);
      $usuario->save();
      return view('cupon');
    }
}
