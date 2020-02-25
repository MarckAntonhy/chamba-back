<?php

use Illuminate\Database\Seeder;

class DistritoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('distrito')->delete();
        DB::table('distrito')->insert([
            //Trujillo
            [
                'id' => 130101,
                'descripcion' => 'Trujillo',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130102,
                'descripcion' => 'El Porvenir',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130103,
                'descripcion' => 'Florencia de Mora',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130104,
                'descripcion' => 'Huanchaco',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130105,
                'descripcion' => 'La Esperanza',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130106,
                'descripcion' => 'Laredo',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130107,
                'descripcion' => 'Moche ',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130108,
                'descripcion' => 'Poroto',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130109,
                'descripcion' => 'Salaverry',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130110,
                'descripcion' => 'Simbal',
                'id_provincia' => 1301,
            ],
            [
                'id' => 130111,
                'descripcion' => 'Victor Larco Herrera',
                'id_provincia' => 1301,
            ]
            //Fin trujillo
        ]);
    }
}
