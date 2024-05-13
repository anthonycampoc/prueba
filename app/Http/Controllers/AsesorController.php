<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Empresa;
use App\Models\Provincia;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsesorController extends Controller
{
    //

    public function create(){
        $asesorA =  DB::select("SELECT * FROM asesors WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $asesorD =  DB::select("SELECT * FROM asesors WHERE status ='DEACTIVATE'"); //trae los datos que tiene su estado desactivado
        $empresa = Empresa::all();
        $provincia = Provincia::all();
        return view("adminP.asesor.mostrarAsesor", compact('asesorA','asesorD', 'empresa','provincia'));
    }

    public function edit($id){
        $asesor = Asesor::findOrFail($id);
        $empresa = Empresa::all();
        $provincia = Provincia::all();
        return view('adminP.asesor.editAsesor1', compact('asesor','empresa','provincia'));
    }

    public function update(Request $request, Asesor $asesorA){

        dd($request);
       /* $request->validate([
            'nombre_1' => 'required',
            'nombre_2' => 'required',
            'apellido_1' => 'required',
            'apellido_2' => 'required',
            'cedula' => 'required',
            'email' => 'required',
            'telefono' => 'required',
            'fecha_nacimiento' => 'required|date',
            'provincia_id' => 'required',
            'canton_id' => 'required',
            'empresa_id' => 'required',
        ]);*/

        //$asesor = $request->all();

       /* if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $asesor['imagen'] = "$nombreI";
        }

        $link = 'https://wa.me/593'.$asesor['telefono'].'?text=HOLA%20TE%20COMUNICAS%20CON%20'.$asesor['nombre_1'].'%20'.$asesor['apellido_1'].'%20TU%20ASESOR%20ACEDEMICO,%20COMO%20TE%20PUEDO%20AYUDAR';
        $asesor['link'] = $link;*/

        $asesorA->update($request->all());

        return redirect()->route('asesor.create');


    }

    public function store(Request $request){

        $nameComplete = $request->nombre_1." ".$request->apellido_1;

       // dd($nameComplete);
        
        $request->validate([
            'nombre_1' => 'required',
            'nombre_2' => 'required',
            'apellido_1' => 'required',
            'apellido_2' => 'required',
            'cedula' => 'required|unique:asesors,cedula',
            'email' => 'required|email|unique:asesors,email',
            'telefono' => 'required|unique:asesors,telefono',
            'imagen' => 'required',
            'fecha_nacimiento' => 'required|date',
            'provincia_id' => 'required',
            'canton_id' => 'required',
            'empresa_id' => 'required',
        ]);

        $asesor = $request->all();

        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $asesor['imagen'] = "$nombreI";
        }

        User::create([
            'name'=>$nameComplete,
            'email'=> $request->email,
            'password'=>bcrypt( $request->cedula),
        ])->assignRole('Asesor');

        $link = 'https://wa.me/593'.$asesor['telefono'].'?text=HOLA%20TE%20COMUNICAS%20CON%20'.$asesor['nombre_1'].'%20'.$asesor['apellido_1'].'%20TU%20ASESOR%20ACEDEMICO,%20COMO%20TE%20PUEDO%20AYUDAR';
        $asesor['link'] = $link;
        Asesor::create($asesor);
        return redirect()->back();
    }

    public function EstadoAsesor($id){
        $estado = DB::select(DB::raw('SELECT a.status from  asesors a WHERE a.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
           if ($item->status == 'DEACTIVATE') {
                DB::select(DB::raw('UPDATE asesors set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
            }else if ($item->status == 'ACTIVE') {
                DB::select(DB::raw('UPDATE asesors set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
            }
        }
        return redirect()->back();
}
}
