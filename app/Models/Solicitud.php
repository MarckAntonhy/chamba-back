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
    ]

    public function usuarios(){
        return $this->hasMany(Usuario::class);
    }
    public function oficios(){
        return $this->hasMany(Oficio::class);
    }
    public function distritos(){
        return $this->hasMany(Distrito::class);
    }
}
