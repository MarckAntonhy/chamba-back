<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    public $table = 'distrito';

    public $fillable = [
        'descripcion'
    ];

    public function departamentos(){
        return $this->hasMany(Departamento::class);
    }

}
