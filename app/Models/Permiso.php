<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    public $table = 'permiso';

    public $fillable = [
        'descripcion'
    ];

    public function roles(){
        return $this->belongsTo(Rol::class,'permiso_rol');
    }
}
