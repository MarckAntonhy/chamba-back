<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    public $table = 'rol';

    public $fillable = [
        'descripcion'
    ]

    public function roles(){
        return $this->hasMany(Usuario::class);
    }
}
