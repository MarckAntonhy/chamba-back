<?php

use Illuminate\Database\Seeder;

class ProvinciaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincia')->delete();
        DB::table('provincia')->insert([
            [
                'id' => 1301,
                'descripcion' => 'Trujillo',
                'id_departamento' => 13,
            ],
            [
                'id' => 1302,
                'descripcion' => 'Ascope',
                'id_departamento' => 13,
            ],
            [
                'id' => 1303,
                'descripcion' => 'Bolívar',
                'id_departamento' => 13,
            ],
            [
                'id' => 1304,
                'descripcion' => 'Chepén',
                'id_departamento' => 13,
            ],
            [
                'id' => 1305,
                'descripcion' => 'Julcán',
                'id_departamento' => 13,
            ],
            [
                'id' => 1306,
                'descripcion' => 'Otuzco',
                'id_departamento' => 13,
            ],
            [
                'id' => 1307,
                'descripcion' => 'Pacasmayo',
                'id_departamento' => 13,
            ],
            [
                'id' => 1308,
                'descripcion' => 'Pataz',
                'id_departamento' => 13,
            ],
            [
                'id' => 1309,
                'descripcion' => 'Sánchez Carrión',
                'id_departamento' => 13,
            ],
            [
                'id' => 1310,
                'descripcion' => 'Santiago de Chuco',
                'id_departamento' => 13,
            ],
            [
                'id' => 1311,
                'descripcion' => 'Gran Chimú',
                'id_departamento' => 13,
            ],
            [
                'id' => 1312,
                'descripcion' => 'Virú',
                'id_departamento' => 13,
            ]
        ]);
    }   
}
