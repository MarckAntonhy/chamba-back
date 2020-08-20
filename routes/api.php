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
Route::get('/usuario/{id}','UsuarioController@show');
Route::post('/usuario/create','UsuarioController@create');
Route::post('/usuario/login','UsuarioController@login');
Route::get('/oficio', 'OficioController@index');
Route::put('/usuario/editar/{id}','UsuarioController@update');
Route::get('/oficio/{id}','SuboficioController@show');
Route::get('/categoria/{id}','OficioController@categoryO');

Route::get('/direccion/{descripcion}','DireccionController@show');
Route::get('/distrito', 'Ubicacion\DistritoController@listar');

