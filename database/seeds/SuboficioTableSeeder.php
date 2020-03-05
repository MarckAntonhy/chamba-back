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
        DB::table('suboficio')->truncate();
        DB::table('suboficio')->insert([
            [
                'id' => 1,
                'descripcion' => 'interiores',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 1,
            ],
            [
                'id' => 2,
                'descripcion' => 'ebanisteria',
                'img' => 'sin ingresar',
                'id_estado' => 1,
                'id_oficio' => 1,
            ]
        ]);
    }
}
