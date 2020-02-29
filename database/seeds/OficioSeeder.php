<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OficioSeeder extends Seeder
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
                'descripcion' => 'carpintería',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'mecanica',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'jardinería',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'mozo',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'informática',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'pintor',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'electricista',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'mesera',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'docente',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'constructor',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'artista',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'conductor',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'gasfitería',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'wedding planer',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'fiestas',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'panadería',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ]
        ]);
    }
}
