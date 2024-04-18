<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //

    public function create(){
       $contacto = Contacto::where('id', 1)->firstOrFail();
       return view('adminP.contacto.mostrarContacto', compact('contacto'));
    }

    public function update(Request $request,Contacto $contacto){

        $contacto->update($request->all());
        return redirect()->back();
    }

    
}
