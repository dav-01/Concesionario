<?php

namespace Database\Seeders;

use App\Models\Tercero;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TercerosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tercero::create([
            'cedula' => '10037273',
            'nombre' => 'David',
            'apellido' => 'Cabrera',
            'celular' => '300273917',
            'correo' => 'cabrerabuelvasd@gmail.com'
        ]);
        Tercero::create([
            'cedula' => '1838297',
            'nombre' => 'Julio',
            'apellido' => 'Vizcaino',
            'celular' => '301837387',
            'correo' => 'julio@gmail.com'
        ]);
        Tercero::create([
            'cedula' => '100333273',
            'nombre' => 'Kevin',
            'apellido' => 'Cantillo',
            'celular' => '302838283',
            'correo' => 'kevin@gmail.com'
        ]);
        Tercero::create([
            'cedula' => '103927386',
            'nombre' => 'Brayan',
            'apellido' => 'Cabrera',
            'celular' => '304273826',
            'correo' => 'brayan@gmail.com'
        ]);
    }
}
