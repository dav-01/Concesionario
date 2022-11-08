<?php

namespace App\Http\Controllers;

use App\Models\Vehiculo;
use Illuminate\Http\Request;

class VehiculoController extends Controller
{
    public function index()
    {
        return view('vehiculo', ['vehiculos' => Vehiculo::all()]);
    }

    public function store(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo = $request->all();

        Vehiculo::create($vehiculo);
        return redirect()->route('home.index');
    }

    public function update(Request $request, Vehiculo $vehiculo)
    {
        $vehiculo->fill(($request->input()));
        $vehiculo->saveOrFail();
        return redirect()->route('home.index');
    }

    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->delete();
        return redirect()->route('home.index');
    }
}
