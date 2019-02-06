<?php

namespace App\Http\Controllers;

use App\Rutas;
use Illuminate\Http\Request;

class RutasController extends Controller
{
  

    public function obtenerRutas(){
      $rutas = Rutas::all();
      return $rutas;
    }
    public function agregarRutas(Request $request){
        $rutas = Rutas::create($request->all());
        return 200;
    }

    public function obtenerRuta($moto){
        $rutas = Rutas::where('moto', '=', $moto)->get();
        return $rutas;
    }

}
