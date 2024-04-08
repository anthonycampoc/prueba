<?php

namespace App\Http\Controllers;

use App\Models\Inicio;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(){

        $inicio = Inicio::all();
        $titulo = titulo::all()
       // dd($inicio);
        return view('layouts.page', compact('inicio','titulo'));
    }
    
    
    public function update( Request $request, Inicio $inicio){
            $inicio->update($request->all());

    }
}
