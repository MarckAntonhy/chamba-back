<?php

use Illuminate\Database\Seeder;

class EstadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('estado')->delete();
        DB::table('estado')->insert([
            //[
                //'id' = 1,
                //'descripcion' => 'activo'
            //],
            [
                'id' => 2,
                'descripcion' => 'inactivo',
            ],
            [
                'id' => 3,
                'descripcion' => 'eliminar',
            ],
            [
                'id' => 4,
                'descripcion' => 'interesado',
            ]
        ]);
    }
}
