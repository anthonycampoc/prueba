<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Empresa;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    //

    public function create(){
        $asesor = Asesor::all();
        $empresa = Empresa::all();
        return view("adminP.asesor.mostrarAsesor", compact('asesor', 'empresa'));
    }

    public function store(Request $request){
        Asesor::create($request->all());
        return redirect()->back();
    }
}
