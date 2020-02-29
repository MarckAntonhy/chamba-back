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
            ->select('oficio.*', 'estado.descripcion as Estado')
            ->get();

        return $users;
    }
}
