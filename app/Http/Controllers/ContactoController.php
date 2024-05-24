<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function __construct(){
        $this->middleware('can:editar.contacto')->only('create');
    }

    public function create(){
       $contacto = Contacto::where('id', 1)->firstOrFail();
       return view('adminP.contacto.mostrarContacto', compact('contacto'));
    }

    public function update(Request $request,Contacto $contacto){
        $contacto2 = $request->all();
        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $contacto2['imagen'] = "$nombreI";
        }

            $contacto->update($contacto2);

        return redirect()->back();
    }

    
}
