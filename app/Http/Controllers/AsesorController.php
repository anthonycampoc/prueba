<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Empresa;
use App\Models\Provincia;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    //

    public function create(){
        $asesor = Asesor::all();
        $empresa = Empresa::all();
        $provincia = Provincia::all();
        return view("adminP.asesor.mostrarAsesor", compact('asesor', 'empresa','provincia'));
    }

    public function store(Request $request){
        Asesor::create($request->all());
        return redirect()->back();
    }
}
