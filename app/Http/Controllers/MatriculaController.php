<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Cliente;
use App\Models\Cursos;
use App\Models\Empresa;
use App\Models\Matricula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatriculaController extends Controller
{
    //

    public function index(){
        $matricula = Matricula::all();
        $empresa = Empresa::all();
        return view('adminPC.matricula.mostrarMatricula', compact('matricula', 'empresa'));
    }

    public function store(Request $request){
        $fileM = $request->all();

        if($file = $request->file('pdf')){
            $ruta = 'archivos/';
            $nombreI = date('YmdHis').".".$file->getClientOriginalExtension();
            $file->move($ruta, $nombreI);
            $fileM ['pdf'] = "$nombreI";
        }

        Matricula::create($fileM);
        return redirect()->back();
    }

    public function EmpresaAsesor(Request $request){
        $data = Asesor::select('nombre_1','apellido_1','id')->where('empresa_id', $request->id)->take(100)->get();
        return response()->json($data);
    }

    public function AsesorCliente(Request $request){
        $data = Cliente::select('nombre_1','apellido_1','id')->where('asesor_id', $request->id)->take(100)->get();
        return response()->json($data);
    }

    public function CarreraCliente(Request $request){
        $data = DB::select(DB::raw('select cu.id, cu.nombre from clientes cl INNER JOIN cursos cu ON cu.id = cl.carrera_id WHERE cl.id = :id'), array("id"=>$request->id));
        return response()->json($data);
    }
    public function Ruc(Request $request){
        $data = Empresa::where('id', $request->id)->firstOrFail();
        return response()->json($data);

    }

}
