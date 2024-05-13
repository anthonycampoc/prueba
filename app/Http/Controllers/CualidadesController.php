<?php

namespace App\Http\Controllers;

use App\Models\cualidades;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CualidadesController extends Controller
{
    //

    public function create(){
        $cualidadA =  DB::select("SELECT * FROM cualidades WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $cualidadD =  DB::select("SELECT * FROM cualidades WHERE status ='DEACTIVATE'"); //trae los datos que tiene su estado desactivado
        return view('adminP.cualidades.mostrarCualidades',compact('cualidadA','cualidadD') );
    }

    public function store(Request $request){
        cualidades::create($request->all());
        return redirect()->back();
    }

    public function edit($id){
        $cualidad = cualidades::findOrFail($id);
        return view('adminP.cualidades.editCualidad', compact('cualidad'));
    }

    public function update(Request $request, cualidades $cualidad){
        $cualidad->update($request->all());
        return redirect()->route('cualidad.create');
    }

    public function EstadoCualidad($id){
        $estado =DB::select(DB::raw('SELECT c.status from  cualidades c WHERE c.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
            if ($item->status == 'DEACTIVATE') {
                 DB::select(DB::raw('UPDATE cualidades set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
             }else if ($item->status == 'ACTIVE') {
                 DB::select(DB::raw('UPDATE cualidades set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
             }
         }
         return redirect()->back();


    }
}
