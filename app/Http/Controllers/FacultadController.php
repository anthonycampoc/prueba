<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class FacultadController extends Controller
{
    public function __construct(){
        $this->middleware('can:crear.facultad')->only('create');
    }
    public function create(){
        $nombreUsuario = Auth::user()->name;

        $facultadA =  DB::select("SELECT * FROM facultads WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $facultadD =  DB::select("SELECT * FROM facultads WHERE status ='DEACTIVATE'"); //trae l
        return view('adminP.facultad.mostrarFacultad', compact('facultadA','facultadD','nombreUsuario'));
    }

    public function store(Request $request){
        $request->validate([
            'titulo'=>'required',
        ]);

        $facultad = $request->all();

        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $facultad['imagen'] = "$nombreI";
        }
        Facultad::create($facultad);
        return redirect()->back();
    }

    public function edit($id){
        $nombreUsuario = Auth::user()->name;
        $facultad = Facultad::findOrFail($id);
        return view('adminP.facultad.editFacultad',compact('facultad','nombreUsuario'));

    }

    public function update(Request $request, Facultad $facultad){
        
        $facultad2 = $request->all();

        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $facultad2['imagen'] = "$nombreI";
        }

        $facultad->update($facultad2);
        return redirect()->route('facultad.create');
    }
    
    public function EstadoFacultad($id){
        $estado = DB::select(DB::raw('SELECT f.status from  facultads f WHERE f.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
           if ($item->status == 'DEACTIVATE') {
                DB::select(DB::raw('UPDATE facultads set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
            }else if ($item->status == 'ACTIVE') {
                DB::select(DB::raw('UPDATE facultads set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
            }
        }
        return redirect()->back();

    }



    
}
