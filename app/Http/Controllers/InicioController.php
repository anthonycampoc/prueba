<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){
        $inicio = Inicio::all();
       // dd($inicio);
        return view('page.index', compact('inicio'));
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
