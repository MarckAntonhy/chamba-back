<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
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
        return $this->hasMany(Distrito::class);
    }

    public function oficios(){
        return $this->belongsToMany(Oficio::class, 'usuario_oficio');
    }
}
