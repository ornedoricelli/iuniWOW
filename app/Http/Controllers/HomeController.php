<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
  public function showHome(){
    $usuario = User::find(1);
    $puntos = $usuario->puntos;
    $nombre_auto = $usuario->nombre_auto;

    return view('home')->with([
      'puntos'=> $puntos,
      'nombreAuto' => $nombre_auto
  ]);
  }
  public function showPerfil(){
    $usuario = User::find(1);
    $puntos = $usuario->puntos;
    $nombre_auto = $usuario->nombre_auto;
    $premio1 = $usuario->premio1;
    $premio2 = $usuario->premio2;
    $premio3 = $usuario->premio3;
    $premio4 = $usuario->premio4;
    return view('miperfil')->with([
      'puntos'=> $puntos,
      'nombreAuto' => $nombre_auto,
      'premio1' => $premio1,
      'premio2' => $premio2,
      'premio3' => $premio3,
      'premio4' => $premio4
  ]);
  }

}
