<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsuarioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuario')->delete();
        DB::table('usuario')->insert([
            [
                'id' => 1,
                'nombres' => 'Yojhaira',
                'apellidos' => 'Gonzales Amaya',
                'f_nacimiento' => '1992-03-08',
                'correo' => 'yojhaira@gmail.com',
                'password' => md5('yojhaira123.'),
                'genero' => 'F',
                'telefono' => '123456789',
                'img' => 'mujer',
                'id_estado' => 1,//activo
                'id_distrito' => '130101', //trujillo
                'id_rol' => 1, //usuario
            ],
            [
                'id' => 2,
                'nombres' => 'Luis Alexander',
                'apellidos' => 'Tirado Gonzalez',
                'f_nacimiento' => '1996-05-23',
                'correo' => 'luis@gmail.com',
                'password' => md5('luis123.'),
                'genero' => 'M',
                'telefono' => '123456789',
                'img' => 'hombre',
                'id_estado' => 1,//activo
                'id_distrito' => '130101', //trujillo
                'id_rol' => 3, //proveedor
            ]
        ]);
    }
}
