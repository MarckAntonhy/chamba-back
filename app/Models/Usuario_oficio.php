<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuario_oficio extends Model
{
    public $table = 'usuario_oficio';

    public function estados(){
        return $this->belongsTo(Estado::class)
    }
}


