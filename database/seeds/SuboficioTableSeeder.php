<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuboficioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suboficio')->delete();
        DB::table('suboficio')->insert([
            [
                'id' => 1,
                'descripcion' => 'carpintería',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 1,
            ],
            [
                'id' => 2,
                'descripcion' => 'jardinería',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 3,
            ],
            [
                'id' => 3,
                'descripcion' => 'pintor',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 6,
            ],
            [
                'id' => 4,
                'descripcion' => 'electricista',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 7,
            ],
            [
                'id' => 5,
                'descripcion' => 'conductor camion',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 12,
            ],
            [
                'id' => 6,
                'descripcion' => 'conductor taxi',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 12,
            ]
        ]);
    }
}
