<?php

namespace App\Http\Controllers;

use App\Models\Oficio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OficioController extends Controller
{
    public function index()
    {
        $users = DB::table('oficio')
            ->join('estado', 'oficio.id_estado', '=', 'estado.id')
            ->select(
                        'oficio.id as categoryID'
                        ,'oficio.id'
                        ,'oficio.descripcion as categoryName' 
                        ,'oficio.descripcion' 
                        ,'oficio.icono as categoryIconName'
                        ,'oficio.img'
                        ,'oficio.img as categoryImageName'
                        ,'estado.descripcion as Estado')
            ->get();

        return response()->json(array("status" => 200, "response" => $users));
    }

    public function categoryO($id){
        //$categoria = $request->input('categoria');
        $usersO = DB::table('usuario')
            ->select('usuario.nombres','oficio.descripcion')
            ->join('usuario_suboficio','usuario.id','=','usuario_suboficio.id_usuario')
            ->join('suboficio','usuario_suboficio.id_suboficio','=','suboficio.id')
            ->join('oficio','suboficio.id_oficio','=','oficio.id')
            ->where('oficio.id','=',$id)
            ->get();

        return response()->json(array("status" => 200, "response" => $usersO));
    }
}