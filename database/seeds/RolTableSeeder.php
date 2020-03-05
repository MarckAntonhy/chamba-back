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
        DB::table('rol')->truncate();
        DB::table('rol')->insert([
            [
                'descripcion' => 'usuario'
            ],
            [
                'descripcion' => 'admin'
            ],
            [
                'descripcion' => 'proveedor'
            ]
        ]);
    }
}
