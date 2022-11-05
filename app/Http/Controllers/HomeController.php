<?php

namespace App\Http\Controllers;

use App\Models\Tercero;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $terceros = Tercero::all();
        print($terceros);
        return view('vehiculo', [$terceros]);
    }
}
