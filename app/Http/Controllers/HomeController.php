<?php

namespace App\Http\Controllers;

use App\Models\Tercero;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $terceros = Tercero::all();
        $vehiculos = Vehiculo::all();

        return view('home', ['terceros' => $terceros, 'vehiculos' => $vehiculos]);
    }
}
