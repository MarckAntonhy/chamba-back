<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public $table = 'estado';

    public $fillable = [
        'descripcion'
    ]
}
