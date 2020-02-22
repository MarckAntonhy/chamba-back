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
        DB::table('oficio')->insert([
            [
                'descripcion' => 'carpinteria',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'mecanica',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ],
            [
                'descripcion' => 'carpinteria',
                'img' => 'sin agregar',
                'id_estado' => 1, 
            ]
        ]);
    }
}
