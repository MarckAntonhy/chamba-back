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
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 2,
                'descripcion' => 'mecanica',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 3,
                'descripcion' => 'jardinería',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 4,
                'descripcion' => 'mozo',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 5,
                'descripcion' => 'informática',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 6,
                'descripcion' => 'pintor',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 7,
                'descripcion' => 'electricista',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 8,
                'descripcion' => 'mesera',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 9,
                'descripcion' => 'docente',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 10,
                'descripcion' => 'constructor',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 11,
                'descripcion' => 'artista',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 12,
                'descripcion' => 'conductor',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 13,
                'descripcion' => 'gasfitería',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 14,
                'descripcion' => 'wedding planer',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 15,
                'descripcion' => 'fiestas',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'id' => 16,
                'descripcion' => 'panadería',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ]
        ]);
    }
}
