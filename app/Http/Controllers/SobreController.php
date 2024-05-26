<?php

namespace App\Http\Controllers;


use App\Models\Sobre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Auth;

class SobreController extends Controller
{
    public function __construct(){
        $this->middleware('can:editar.sobre')->only('create');
    }

    public function create(){
        $nombreUsuario = Auth::user()->name;
        $sobre = Sobre::where('id', 1)->firstOrFail();
        return view('adminP.sobre.mostrarSobre',compact('sobre','nombreUsuario') );
    }

    public function update(Request $request, Sobre $sobre){

        
        $request->validate([
            'parrafo1'=> 'required',
            'tituloLink'=> 'required',
        ]);

        $sobre1 = $request->all();

        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $sobre1['imagen'] = "$nombreI";
        }

        $sobre->update($sobre1);
        return redirect()->back();
    }
}
