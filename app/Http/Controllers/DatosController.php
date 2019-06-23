<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DatosController extends Controller
{
  public function saveDatos(Request $request){
    //dd($request);
    $usuario = User::find(1);
      $usuario->nombre_auto = $request->nombre_auto;
      $usuario->venc_licencia = $request->venc_licencia;
      $usuario->ult_vtv = $request->ult_vtv;
      $usuario->ult_aceite = $request->ult_aceite;

      $usuario->save();
      return redirect('/home');
  }
  public function showForm(){
    return view('datosPersonales');
  }

}
