<?php

namespace App\Http\Controllers;

use App\Models\Redes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RedesController extends Controller
{
    //

    public function create(){
        $redesA =  DB::select("SELECT * FROM redes WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $redesD =  DB::select("SELECT * FROM redes WHERE status ='DEACTIVATE'"); //trae los datos que tiene su estado desactivado
        return view('adminP.redes.mostrarRedes', compact('redesA', 'redesD'));
    }

    public function store(Request $request){
        Redes::create($request->all());
        return redirect()->back();
    }

    public function edit($id){
        $redes = Redes::findOrFail($id);
        return view('adminP.redes.editRedes', compact('redes'));
    }

    public function update(Request $request){
        
        DB::select(DB::raw('UPDATE redes SET icono = :icono, nombre = :nombre, link = :link  WHERE  id = :id'), 
        array('id'=> $request->id, 'nombre'=>$request->nombre, 'icono'=>$request->icono, 'link'=>$request->link));
        return redirect()->route('redes.create');
    }

    public function EstadoRedes($id){
        $estado = DB::select(DB::raw('SELECT r.status from redes r WHERE r.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DEACTIVATE') {
                 DB::select(DB::raw('UPDATE redes set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
             }else if ($item->status == 'ACTIVE') {
                 DB::select(DB::raw('UPDATE redes set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
             }
         }
         return redirect()->back();
    }
}
