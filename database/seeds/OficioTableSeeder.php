<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OficioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oficio')->delete();
        DB::table('oficio')->insert([
            [
                'id' => 1,
                'descripcion' => 'carpintería',
                'img' => 'carpenter',
                'id_estado' => 1, 
            ],
            [
                'id' => 2,
                'descripcion' => 'mecanica',
                'img' => 'mechanic',
                'id_estado' => 1, 
            ],
            [
                'id' => 3,
                'descripcion' => 'jardinería',
                'img' => 'gardener',
                'id_estado' => 1, 
            ],
            [
                'id' => 4,
                'descripcion' => 'mozo',
                'img' => 'waiter2',
                'id_estado' => 1, 
            ],
            [
                'id' => 5,
                'descripcion' => 'informática',
                'img' => 'computer',
                'id_estado' => 1, 
            ],
            [
                'id' => 6,
                'descripcion' => 'pintor',
                'img' => 'painter',
                'id_estado' => 1, 
            ],
            [
                'id' => 7,
                'descripcion' => 'electricista',
                'img' => 'electrical',
                'id_estado' => 1, 
            ],
            [
                'id' => 8,
                'descripcion' => 'mesera',
                'img' => 'waiter',
                'id_estado' => 1, 
            ],
            [
                'id' => 9,
                'descripcion' => 'docente',
                'img' => 'teacher',
                'id_estado' => 1, 
            ],
            [
                'id' => 10,
                'descripcion' => 'constructor',
                'img' => 'builder',
                'id_estado' => 1, 
            ],
            [
                'id' => 11,
                'descripcion' => 'artista',
                'img' => 'artist',
                'id_estado' => 1, 
            ],
            [
                'id' => 12,
                'descripcion' => 'conductor',
                'img' => 'driver',
                'id_estado' => 1, 
            ],
            [
                'id' => 13,
                'descripcion' => 'gasfitería',
                'img' => 'plumber',
                'id_estado' => 1, 
            ],
            [
                'id' => 14,
                'descripcion' => 'wedding planer',
                'img' => 'weddingplaner',
                'id_estado' => 1, 
            ],
            [
                'id' => 15,
                'descripcion' => 'fiestas',
                'img' => 'party',
                'id_estado' => 1, 
            ],
            [
                'id' => 16,
                'descripcion' => 'panadería',
                'img' => 'baker',
                'id_estado' => 1, 
            ]
        ]);
    }
}
