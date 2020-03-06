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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/estado','EstadoController@create');
Route::post('/usuario','UsuarioController@create');
Route::post('/usuario/login','UsuarioController@login');
Route::get('/oficio', array('middleware' => 'cors', 'uses' => 'OficioController@index'));
Route::put('/usuario/editar/{id}','UsuarioController@update');
Route::get('/oficio/{id}','SuboficioController@show');
Route::get('/direccion/{descripcion}','DireccionController@show');

