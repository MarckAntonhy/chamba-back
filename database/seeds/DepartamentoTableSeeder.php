<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartamentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departamento')->delete();
        DB::table('departamento')->insert([
            [
                'id'=>1,
                'descripcion' => 'Amazonas',
            ],
            [
                'id'=>2,
                'descripcion' => 'Áncash',
            ],
            [
                'id'=>3,
                'descripcion' => 'Apurímac',
            ],
            [
                'id'=>4,
                'descripcion' => 'Arequipa',
            ],
            [
                'id'=>5,
                'descripcion' => 'Ayacucho',
            ],
            [
                'id'=>6,
                'descripcion' => 'Cajamarca',
            ],
            [
                'id'=>7,
                'descripcion' => 'Callao',
            ],
            [
                'id'=>8,
                'descripcion' => 'Cusco',
            ],
            [
                'id'=>9,
                'descripcion' => 'Huancavelica',
            ],
            [
                'id'=>10,
                'descripcion' => 'Huánuco',
            ],
            [
                'id'=>11,
                'descripcion' => 'Ica',
            ],
            [
                'id'=>12,
                'descripcion' => 'Junín',
            ],
            [
                'id'=>13,
                'descripcion' => 'La Libertad',
            ],
            [
                'id'=>14,
                'descripcion' => 'Lambayeque',
            ],
            [
                'id'=>15,
                'descripcion' => 'Lima',
            ],            
            [
                'id'=>16,
                'descripcion' => 'Loreto',
            ],           
            [
                'id'=>17,
                'descripcion' => 'Madre de Dios',
            ],          
            [
                'id'=>18,
                'descripcion' => 'Moquegua',
            ],           
            [
                'id'=>19,
                'descripcion' => 'Pasco',
            ],            
            [
                'id'=>20,
                'descripcion' => 'Piura',
            ],
            [
                'id'=>21,
                'descripcion' => 'Puno',
            ],            
            [
                'id'=>22,
                'descripcion' => 'San Martín',
            ],            
            [
                'id'=>23,
                'descripcion' => 'Tacna',
            ],            
            [
                'id'=>24,
                'descripcion' => 'Tumbes',
            ],
            [
                'id'=>25,
                'descripcion' => 'Ucayali',
            ]
        ]);
    }
}
