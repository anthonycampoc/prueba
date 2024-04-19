<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Empresa;
use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    //

    public function index(){
        $matricula = Matricula::all();
        $empresa = Empresa::all();
        return view('adminPC.matricula.mostrarMatricula', compact('matricula', 'empresa'));
    }

    public function store(Request $request){
        Matricula::create($request->all());
        return redirect()->back();
    }

    public function EmpresaAsesor(Request $request){
        $data = Asesor::select('nombres','apellidos','id')->where('empresa_id', $request->id)->take(100)->get();
        return response()->json($data);
    }
}
