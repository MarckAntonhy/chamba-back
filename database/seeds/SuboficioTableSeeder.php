<?php

use Illuminate\Database\Seeder;

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
