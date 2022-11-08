<?php

namespace App\Http\Controllers;

use App\Models\Tercero;
use App\Models\Vehiculo;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use DataTables;
use Yajra\DataTables\Contracts\DataTable;

class TerceroController extends Controller
{

    public function store(Request $request)
    {

        // Funcion para crear terceros en la base de datos y luego redirigir a la vista home

        $tercero = $request->all();

        Tercero::create($tercero);
        return redirect()->route('home.index');
    }

    public function update(Request $request, Tercero $tercero)
    {

        // Funcion para actualizar terceros en la base de datos y luego redirigir a la vista home

        $tercero->fill(($request->input()));
        $tercero->saveOrFail();
        return redirect()->route('home.index');
    }

    public function destroy(Tercero $tercero)
    {
        // Funcion para eliminar terceros en la base de datos y luego redirigir a la vista home
        $tercero->delete();
        return redirect()->route('home.index');
    }
}
