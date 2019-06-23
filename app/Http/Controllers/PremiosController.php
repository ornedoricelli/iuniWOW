<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PremiosController extends Controller
{
    public function showPremios(){
      return view('premios');
    }

    public function savePremios(Request $request){
    $usuario = User::find(1);
      $usuario->premio1 = $request->premio1;
      $usuario->premio2 = $request->premio2;
      $usuario->premio3 = $request->premio3;
      $usuario->premio4 = $request->premio4;
      $usuario->puntos = 100;

      $usuario->save();
      return redirect('/datospersonales');
      }
}
