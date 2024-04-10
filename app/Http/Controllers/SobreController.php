<?php

namespace App\Http\Controllers;

use App\Models\Sobre;
use Illuminate\Http\Request;

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
}
