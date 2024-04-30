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
        $matricula = DB::select('SELECT m.id AS id, m.pdf AS archivo, em.nombre AS empresa, ase.nombre_1 AS asesor, cli.nombre_1 AS cliente, cur.nombre AS carrera 
        from matriculas m 
        INNER JOIN empresas em on em.id = m.empresa_id 
        INNER JOIN asesors ase on ase.id = m.asesor_id 
        INNER JOIN clientes cli on cli.id = m.cliente_id 
        INNER JOIN cursos cur on cur.id = m.carrera_id');
        $empresa = Empresa::all();
        return view('adminPC.matricula.mostrarMatricula', compact('matricula', 'empresa'));
    }

    public function store(Request $request){

        //dd($request->cliente_id);
        
        $request->validate([
            'pdf' => 'required|mimetypes:application/pdf|max:1024', 
            'empresa_id' => 'required', 
            'asesor_id' => 'required', 
            'cliente_id' => 'required', 
            'fecha_matricula' => 'required', 
        ]);

        $fileM = $request->all();
        if($file = $request->file('pdf')){
            $ruta = 'archivos/';
            $nombreI = date('YmdHis').".".$file->getClientOriginalExtension();
            $file->move($ruta, $nombreI);
            $fileM ['pdf'] = "$nombreI";
        }
        
        DB::select(DB::raw('UPDATE clientes set status ="ACTIVE" WHERE id  = :id'), array('id'=>$request->cliente_id));
        Matricula::create($fileM);
        return redirect()->back();
    }

    public function EmpresaAsesor(Request $request){
        $data = Asesor::select('nombre_1','apellido_1','id')->where('empresa_id', $request->id)->take(100)->get();
        return response()->json($data);
    }

    public function AsesorCliente(Request $request){
        //$data = Cliente::select('nombre_1','apellido_1','id')->where('asesor_id', $request->id)->take(100)->get();
        $data = DB::select(DB::raw('SELECT cli.nombre_1, cli.id from clientes cli 
        INNER JOIN asesors ase ON cli.asesor_id = ase.id 
        WHERE ase.id = :id and cli.status = "DEACTIVATE"'), array("id"=>$request->id));
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

    public function Download($id){
       $data = Matricula::where('id',$id)->firstOrFail();
       $file = public_path("archivos/{$data->pdf}");
       return response()->download($file);
    }

}
