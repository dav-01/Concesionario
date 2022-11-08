<?php

namespace App\Http\Controllers;

use App\Models\Tercero;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        // Funcion creada para retornas toda la lista de terceros y de vehiculos
        
        $terceros = Tercero::all();
        $vehiculos = Vehiculo::all();

        return view('home', ['terceros' => $terceros, 'vehiculos' => $vehiculos]);
    }
}
