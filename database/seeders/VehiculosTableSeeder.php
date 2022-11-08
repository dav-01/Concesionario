<?php

namespace Database\Seeders;

use App\Models\Vehiculo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VehiculosTableSeeder extends Seeder
{

    public function run()
    {
        Vehiculo::create([
            'placa' => 'WGI736',
            'vin' => 'S-18373',
            'modelo' => 'B-Max',
            'año' => '2016',
            'color' => 'Azul',
            'kilometraje' => '20000',
            'id_tercero' => '1',

        ]);
        Vehiculo::create([
            'placa' => 'KSO273',
            'vin' => 'S-39273',
            'modelo' => 'Bronco',
            'año' => '2019',
            'color' => 'Rojo',
            'kilometraje' => '10000',
            'id_tercero' => '3',

        ]);
        Vehiculo::create([
            'placa' => 'WGI736',
            'vin' => 'S-18373',
            'modelo' => 'EcoSport',
            'año' => '2017',
            'color' => 'Gris',
            'kilometraje' => '30000',
            'id_tercero' => '2',

        ]);
    }
}
