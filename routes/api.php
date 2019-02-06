<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['middleware' => 'cors'], function(){
    Route::get('rutas', 'RutasController@obtenerRutas')->name('getRutas');
    Route::get('rutas/{moto}', 'RutasController@obtenerRuta')->name('getRuta');
    Route::get('rutas/op/{idruta}', 'OpinionesController@obtenerOpiniones')->name('getOpiniones');
    Route::post('rutas', 'RutasController@agregarRutas')->name('addRutas');
    Route::post('rutas/op', 'OpinionesController@agregarOp')->name('addOp');

});


