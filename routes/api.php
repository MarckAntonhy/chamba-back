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
Route::post('/departamento','DepartamentoController@create');
Route::post('/provincia','ProvinciaController@create');
Route::post('/distrito','DistritoController@create');
Route::post('/rol','RolController@create');
Route::post('/usuario','UsuarioController@create');
Route::get('/oficio','OficioController@index');
Route::put('/usuario/{id}','UsuarioController@update');
Route::get('/suboficio/{id}','SuboficioController@show');
Route::get('/direccion/{descripcion}','DireccionController@show');
