<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public $table = 'plan';

    public $fillable = [
        'fecha',
        'hora',
        'precio',
        'cantidad'
    ];

    public function estados(){
        return $this->belongsTo(Estado::class);
    }

}
