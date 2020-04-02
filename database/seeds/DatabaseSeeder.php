<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //descomentar las llamadas a los seeders de las tablas
        $this->call(EstadoTableSeeder::class);
        $this->call(OficioTableSeeder::class);
        $this->call(DepartamentoTableSeeder::class);
        $this->call(ProvinciaTableSeeder::class);
        $this->call(DistritoTableSeeder::class);
        $this->call(SuboficioTableSeeder::class);
        $this->call(RolTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(UsuarioSuboficioTableSeeder::class);
        // $this->call(SolicitudTableSeeder::class);
    }
}
