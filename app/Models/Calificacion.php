<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    public $table = 'calificacion';

    public $fillable = [
        'comentario',
        'nroestrellas',
        'f_comentario',
        'h_comentario'
    ];

    public function usuario_oficios(){
        return $this->hasMany(Usuario_oficio::class);
    }
}
