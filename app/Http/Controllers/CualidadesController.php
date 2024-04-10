<?php

namespace App\Http\Controllers;

use App\Models\cualidades;
use Illuminate\Http\Request;

class CualidadesController extends Controller
{
    //

    public function create(){
        $cualidad = cualidades::all();
        return view('adminP.cualidades.mostrarCualidades',compact('cualidad') );
    }

    public function store(Request $request){
        cualidades::create($request->all());

        return redirect()->back();
    }
}
