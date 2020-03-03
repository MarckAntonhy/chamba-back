<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;

class Usuario extends Model implements JWTSubject
{
    public $table = 'usuario';

    public $fillable = [
        'nombres',
        'apellidos',
        'f_nacimiento',
        'correo',
        'password',
        'genero',
        'telefono'
    ];

    public function distritos(){
        return $this->belongsTo(Distrito::class);
    }

    public function estados(){
        return $this->belongsTo(Estado::class);
    }

    //funcion para la solicitud
    public function solicitudes(){
        return $this->hasMany(Solicitud::class);
    }

    //funcion para acceder a las solicitud_respuesta
    public function solicitud_respuestas(){
        return $this->hasMany(Solicitud_respuesta::class);
    }
}
