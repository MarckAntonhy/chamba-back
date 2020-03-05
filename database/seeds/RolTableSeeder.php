<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rol')->delete();
        DB::table('rol')->insert([
            [
                'id' => 1,
                'descripcion' => 'usuario'
            ],
            [
                'id' => 2,
                'descripcion' => 'admin'
            ],
            [
                'id' => 3,
                'descripcion' => 'proveedor'
            ]
        ]);
    }
}
