<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

    // LLamado a los seeders de terceros y vehiculos
    $this->call(TercerosTableSeeder::class);
    $this->call(VehiculosTableSeeder::class);
    }
}
