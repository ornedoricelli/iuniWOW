<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{

  public function cambiar(Request $request){
    //dd($request);
    $usuario= User::find(1);
    if (isset($request->premio1)) {
      $usuario->premio1 = $request->premio1;
      $usuario->save();
      return redirect('miperfil');
    };
    if (isset($request->premio2)) {
      $usuario->premio2 = $request->premio2;
      $usuario->save();
      return redirect('miperfil');
    };
    if (isset($request->premio3)) {
      $usuario->premio3 = $request->premio3;
      $usuario->save();
      return redirect('miperfil');
    };
}
  public function canjear($puntos){
    $usuario = User::find(1);
    $usuario->puntos = $usuario->puntos - $puntos;

    $usuario->save();

    return redirect('/home');
  }
  public function showHome(){
    $usuario = User::find(1);
    $puntos = $usuario->puntos;
    $nombre_auto = $usuario->nombre_auto;
    $premio1 = $usuario->premio1;
    $premio2 = $usuario->premio2;
    $premio3 = $usuario->premio3;
    $premio4 = $usuario->premio4;
    
    return view('home')->with([
      'puntos'=> $puntos,
      'nombreAuto' => $nombre_auto,
      'premio1' => $premio1,
      'premio2'=> $premio2,
      'premio3' => $premio3,
      'premio4' => $premio4
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
