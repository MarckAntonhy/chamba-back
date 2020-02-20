<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    public $table = 'distrito';

    public $fillable = [
        'descripcion'
    ];

    public function provincias(){
        return $this->belongsTo(Provincia::class);
    }

}
