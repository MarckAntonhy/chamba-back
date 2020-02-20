<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    public $table = 'solicitud';

    public $fillable = [
        'fecha',
        'hora',
        'direccion',
        'descripcion',
        'estado',
        'urgencia'
    ];
    public function oficios(){
        return $this->hasMany(Oficio::class);
    }
    public function distritos(){
        return $this->hasMany(Distrito::class);
    }
    public function estados(){
        return $this->belongsTo(Estado::class)
    }

    //funcion para la solicitud_respuesta
    public function solicitudes(){
        return $this->hasMany(Solicitud::class);
    }
}
