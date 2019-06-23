<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeneficiosController extends Controller
{
    public function showBeneficios(){
      return view('beneficios');
    }

    public function showEventos(){
      return view('eventos');
    }

    public function showCupon(){
      return view('cupon');
    }
}
