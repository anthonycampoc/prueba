<?php

namespace App\Http\Controllers;

use App\Models\Cursos;
use App\Models\Facultad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CursosController extends Controller
{
    //

    public function create(){
       // $carreraA = Cursos::all();
        $carreraA =  DB::select("SELECT * FROM cursos WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $carreraD =  DB::select("SELECT * FROM cursos WHERE status ='DEACTIVATE'");
        $facultad = Facultad::all();
        return view('adminP.carrera.mostrarCarrera', compact('carreraD','carreraA', 'facultad'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required',
            'cantEstudiante'=>'required',
            'duracion'=>'required',
            'imagen'=>'required',
            'facultad_id'=>'required',
        ]);

        $carrera =  $request->all();

        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $carrera['imagen'] = "$nombreI";
        }
        
        Cursos::create($carrera);
        return redirect()->back();

    }

    public function edit($id){
        $carrera = Cursos::findOrFail($id);
        $facultad = Facultad::all();
         return view("AdminP.carrera.editarCarrera", compact("carrera",'facultad'));

    }

    public function update(Request $request, Cursos $carrera){
        $request->validate([
            'nombre'=>'required',
            'cantEstudiante'=>'required',
            'duracion'=>'required',
            'facultad_id'=>'required',
        ]);

        $carrera2 =  $request->all();

        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $carrera2['imagen'] = "$nombreI";
        }
        
        $carrera->update($carrera2);
        return redirect()->route("carrera.create");

    }

    public function EstadoCarrera($id){
        $estado = DB::select(DB::raw('SELECT c.status from  cursos c WHERE c.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
           if ($item->status == 'DEACTIVATE') {
                DB::select(DB::raw('UPDATE cursos set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
            }else if ($item->status == 'ACTIVE') {
                DB::select(DB::raw('UPDATE cursos set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
            }
        }
        return redirect()->back();

    }
}
