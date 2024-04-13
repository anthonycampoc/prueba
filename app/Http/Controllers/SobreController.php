<?php

namespace App\Http\Controllers;

use App\Models\Sobre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class SobreController extends Controller
{
    //

    public function create(){
        $sobre = Sobre::all();
        return view('adminP.sobre.mostrarSobre',compact('sobre') );
    }

    public function store(Request $request){
        Sobre::create($request->all());
        return redirect()->back();
    }

    // Método para mostrar el formulario de edición
    public function edit($id){
        $sobre = Sobre::find($id);
        return view('adminP.sobre.editarSobre', compact('sobre'));
    }
}
