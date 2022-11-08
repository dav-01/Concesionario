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
    public function index()
    {

        $terceros = Tercero::all();

        return view('home', ['terceros' => $terceros]);
    }

    public function store(Request $request)
    {
        $tercero = $request->all();

        Tercero::create($tercero);
        return redirect()->route('home.index');
    }

    public function edit(Tercero $tercero)
    {
        return view('home', ['tercero' => $tercero]);
    }

    public function update(Request $request, Tercero $tercero)
    {
        $tercero->fill(($request->input()));
        $tercero->saveOrFail();
        return redirect()->route('home.index');
    }

    public function destroy(Tercero $tercero)
    {
        $tercero->delete();
        return redirect()->route('home.index');
    }
}
