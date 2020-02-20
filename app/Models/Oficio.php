<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficio extends Model
{
    public $table = 'oficio';

    public $fillable = [
        'descripcion'
    ]
    public function estados(){
        return $this->belongsTo(Estado::class)
    }

    public function usuarios(){
        return $this->belongsToMany(Usuario::class, 'usuario_oficio');
    }
    
}
