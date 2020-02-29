<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suboficio extends Model
{
    public $table = 'suboficio';

    public $fillable = [
        'descripcion',
        'img',
        'id_estado',
        'id_oficio'
    ];

    public function estados(){
        return $this->belongsTo(Estado::class);
    }

    public function oficios(){
        return $this->belongsTo(Oficio::class);
    }
}
