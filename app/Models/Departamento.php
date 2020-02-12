<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public $table = 'departamento';

    public $fillable = [
        'descripcion'
    ]
}
