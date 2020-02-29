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
        // $this->call(UsersTableSeeder::class);
        $this->call(OficioSeeder::class);
        //$this->call(DepartamentoTableSeeder::class);
        //$this->call(ProvinciaTableSeeder::class);
        //$this->call(DistritoTableSeeder::class);
        //$this->call(EstadoTableSeeder::class);
    }
}
