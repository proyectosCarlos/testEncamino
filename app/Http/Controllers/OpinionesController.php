<?php

namespace App\Http\Controllers;

use App\Opiniones;
use Illuminate\Http\Request;

class OpinionesController extends Controller
{
    public function obtenerOpiniones($idruta){
        $op = Opiniones::where('id_ruta', '=', $idruta)->get();
        return $op;
    }

    public function agregarOp(Request $request){
        $op = Opiniones::create($request->all());
        return 200;
    }
}
