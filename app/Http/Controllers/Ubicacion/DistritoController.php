<?php

namespace App\Http\Controllers\Ubicacion;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DistritoController extends Controller
{
    public function listar()
    {
        $result = DB::table('distrito')
                    ->select('*')
                    ->where('id_provincia','=','1301')
                    ->get();

        if($result->count() > 0){
            $code = 200;
            $message = "found data";
        }
        else{
            $code = 404;
            $message = "not found data";
        }
        
        return json_encode(array("status" => $code, "message" => $message, "response" => $result));
    }
}
