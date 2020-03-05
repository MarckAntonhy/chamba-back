<?php

namespace App\Http\Controllers;
use App\Models\Usuario;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $usuario = $request->input('usuario');
        $contraseña = MD5($request->input('contraseña'));

        $result = DB::table('usuario')
        ->select('usuario.*')
        ->where('correo','=',$usuario)
        ->where('password','=', $contraseña);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $usuarios = new Usuario();

        $usuarios->nombres = $request->input('nombres');
        $usuarios->apellidos = $request->input('apellidos');
        $usuarios->f_nacimiento = $request->input('f_nacimiento');
        $usuarios->correo = $request->input('correo');
        $usuarios->password = MD5($request->input('password'));
        $usuarios->genero = $request->input('genero');
        $usuarios->telefono = $request->input('telefono');
        $usuarios->img = $request->input('img');
        $usuarios->id_estado = $request->input('id_estado');
        $usuarios->id_distrito = $request->input('id_distrito');
        $usuarios->id_rol = $request->input('id_rol');
        if($usuarios->save()){
            return response()->json(array("status"=>200,"response"=>$usuarios));
        };
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function ingresar(Request $request)
    {
        $usuario = DB::query()
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuarios = Usuario::find($id);
        $usuarios->nombres = $request->input('nombres');
        // $usuarios->apellidos = $request->input('apellidos');
        // $usuarios->f_nacimiento = $request->input('f_nacimiento');
        // $usuarios->correo = $request->input('correo');
        // $usuarios->password = MD5($request->input('password'));
        // $usuarios->genero = $request->input('genero');
        // $usuarios->telefono = $request->input('telefono');
        // $usuarios->img = $request->input('img');
        if($usuarios->save()){
            return response()->json(array("status"=>200,"response"=>$usuarios));
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
