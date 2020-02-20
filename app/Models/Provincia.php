<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public $table = 'provincia';

    public $fillable = [
        'descripcion'
    ];

    public function departamentos(){
        return $this->belongsTo(Departamento::class);
    }
}
