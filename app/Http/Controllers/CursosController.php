<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Facultad;
use Illuminate\Http\Request;

class CursosController extends Controller
{
    //

    public function create(){
        $carrera = Cursos::all();
        $facultad = Facultad::all();
        return view('adminP.carrera.mostrarCarrera', compact('carrera', 'facultad'));
    }

    public function store(Request $request){

        Cursos::create($request->all());
        return redirect()->back();

    }
}
