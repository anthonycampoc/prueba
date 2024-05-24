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
    public function __construct(){
        $this->middleware('can:crear.asesor')->only('create');
    }

    public function create(){
        $asesorA =  DB::select("SELECT * FROM asesors WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $asesorD =  DB::select("SELECT * FROM asesors WHERE status ='DEACTIVATE'"); //trae los datos que tiene su estado desactivado
        $empresa = Empresa::all();
        $provincia = Provincia::all();
        return view("adminP.asesor.mostrarAsesor", compact('asesorA','asesorD', 'empresa','provincia'));
    }

    public function edit($id){
        $asesor = Asesor::findOrFail($id);
        $idProvincia = DB::select(DB::raw('SELECT provincia_id from asesors WHERE id = :id'), array('id'=>$id));
        foreach ($idProvincia as $item) {
            $canton =  DB::select(DB::raw('SELECT c.id, c.nombre from cantons c JOIN provincias p on p.id = c.provincia_id WHERE p.id = :id'), array('id'=>$item->provincia_id));
        }
        $empresa = Empresa::all();
        $provincia = Provincia::all();
        return view('adminP.asesor.editAsesor', compact('asesor','empresa','provincia', 'canton'));
    }

    public function update(Request $request){

       //dd($request);
        $request->validate([
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
        ]);

        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $updateimg = "$nombreI";
        }else {
            $updateimg = $request->imagen2;
        }

        $link = 'https://wa.me/593'.$request['telefono'].'?text=HOLA%20TE%20COMUNICAS%20CON%20'.$request['nombre_1'].'%20'.$request['apellido_1'].'%20TU%20ASESOR%20ACEDEMICO,%20COMO%20TE%20PUEDO%20AYUDAR';
        DB::select(DB::raw('UPDATE asesors set nombre_1 =:nombre, nombre_2 = :nombre2, apellido_1 = :apellido1, apellido_2 = :apellido2, cedula = :cedula, email = :email, telefono =:telefono, imagen =:imagen, link=:link, provincia_id=:provincia, canton_id=:canton, empresa_id=:empresa WHERE id  = :id'), array('id'=>$request->id, 'nombre'=>$request->nombre_1,'nombre2'=>$request->nombre_2, 'apellido1'=>$request->apellido_1, 'apellido2'=>$request->apellido_2, 'cedula'=>$request->cedula,'email'=>$request->email, 'telefono'=>$request->telefono, 'imagen'=>$updateimg, 'link'=>$link, 'provincia'=>$request->provincia_id,'canton'=>$request->canton_id, 'empresa'=>$request->empresa_id));

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
