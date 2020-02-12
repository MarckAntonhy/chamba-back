<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Solicitud_respuesta extends Model
{
    public $table = 'solicitud_respuesta';

    public $fillable = [
        'confirmado'
    ];

    public function proveedores(){
        return $this->hasMany(Usuario::class);
    }
    public function solicitudes(){
        return $this->hasMany(Solicitud::class);
    }
}
