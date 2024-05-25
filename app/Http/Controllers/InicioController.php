<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Contacto;
use App\Models\cualidades;
use App\Models\Facultad;
use App\Models\Inicio;
use App\Models\Redes;
use App\Models\Sobre;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function __construct(){
        $this->middleware('can:crear.inicio')->only('create');
    }

    public function create(){
    
        $inicioA =  DB::select("SELECT * FROM inicios WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $inicioD =  DB::select("SELECT * FROM inicios WHERE status ='DEACTIVATE'"); //trae los datos que tiene su estado desactivado
        return view('adminP.inicio.mostrarInicio',compact('inicioA','inicioD') );
    }

    public function store(Request $request){
        
        $request->validate([
            'titulo'=>'required',
        ]);
            $inicio = $request->all();

            if($imagen = $request->file('imagen')){
                $ruta = 'imagen/';
                $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
                $imagen->move($ruta, $nombreI);
                $inicio['imagen'] = "$nombreI";
            }

            Inicio::create($inicio);
            return redirect()->back();
    }

    public function edit($id){
        $inicio = Inicio::findOrFail($id);
        return view('adminP.inicio.editInicio', compact('inicio'));
    }

    public function update( Request $request, Inicio $inicio){

        $inicio2 = $request->all();
        if($imagen = $request->file('imagen')){
            $ruta = 'imagen/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreI);
            $inicio2['imagen'] = "$nombreI";
        }

            $inicio->update($inicio2);
            return redirect()->route('inicio.create');

    }

    public function EstadoIncio($id){
            $estado = DB::select(DB::raw('SELECT i.status from inicios i WHERE i.id = :id'), array('id'=>$id));

            foreach ($estado as $item) {
               if ($item->status == 'DEACTIVATE') {
                    DB::select(DB::raw('UPDATE inicios set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
                }else if ($item->status == 'ACTIVE') {
                    DB::select(DB::raw('UPDATE inicios set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
                }
            }
            return redirect()->back();
    }
}
