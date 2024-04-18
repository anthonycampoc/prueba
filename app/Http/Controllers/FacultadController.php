<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;

class FacultadController extends Controller
{
    public function create(){

        $facultad = Facultad::all();
        return view('adminP.facultad.mostrarFacultad', compact('facultad'));
    }

    public function store(Request $request){
        Facultad::create($request->all());
        return redirect()->back();
    }

    
}
