<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use Illuminate\Http\Request;

class AsesorController extends Controller
{
    //

    public function create(){
        $asesor = Asesor::all();
        return view("adminP.asesor.mostrarAsesor", compact('asesor'));
    }

    public function store(Request $request){
        Asesor::create($request->all());
        return redirect()->back();
    }
}
