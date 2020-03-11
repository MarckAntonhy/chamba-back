<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolicitudTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solicitud')->delete();
        DB::table('solicitud')->insert([
            [
                'id' => 1,
                'titulo' => 'PINTAR CASA',
                'fecha' => '2020-03-10',
                'hora' => '21:00:00',
                'descripcion' => 'Pintar una casa de 100 metros cuadrados',
                'urgencia' => 0,
                'id_usuario' => 1,
                'id_oficio' => 1,
                'id_distrito' => 130101,
                'id_estado' => 1,
            ],
            [
                'id' => 2,
                'titulo' => 'HACER UNA MESA',
                'fecha' => '2020-03-10',
                'hora' => '21:00:00',
                'descripcion' => 'Relizar una mesa de 1.20cm cuadrado, con dos pisos',
                'urgencia' => 0,
                'id_usuario' => 1,
                'id_oficio' => 1,
                'id_distrito' => 130101,
                'id_estado' => 1,
            ],
        ]);
    }
}
