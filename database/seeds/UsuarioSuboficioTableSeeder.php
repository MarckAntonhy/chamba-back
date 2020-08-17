<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioSuboficioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario_suboficio')->delete();
        DB::table('usuario_suboficio')->insert([
            [
                'id' => 1,
                'id_usuario' => 2,
                'id_suboficio' => 1,
                'id_estado' => 1
            ],
            [
                'id' => 2,
                'id_usuario' => 2,
                'id_suboficio' => 2,
                'id_estado' => 1
            ],
            [
                'id' => 3,
                'id_usuario' => 2,
                'id_suboficio' => 2,
                'id_estado' => 1
            ]
        ]);
    }
}
