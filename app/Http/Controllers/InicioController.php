<?php

namespace App\Http\Controllers;

use App\Models\cualidades;
use App\Models\Facultad;
use App\Models\Inicio;
use App\Models\Sobre;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $inicio = Inicio::all();
        $sobre = Sobre::where('id', 1)->firstOrFail();
        $cualidad = cualidades::all();
        $facultad = Facultad::all();
        $contacto = Contacto::all();
       // dd($inicio);
        return view('layouts.page', compact('inicio','sobre','cualidad','facultad', 'contacto'));
    }
    
    public function create(){
        $inicio = Inicio::all();
        return view('adminP.inicio.mostrarInicio',compact('inicio') );
    }

    public function store(Request $request){
            Inicio::create($request->all());
            return redirect()->back();
    }

    public function update( Request $request, Inicio $inicio){
            $inicio->update($request->all());

    }
}
