<?php

namespace App\Http\Controllers;

use App\Models\Asesor;
use App\Models\Contacto;
use App\Models\cualidades;
use App\Models\Facultad;
use App\Models\Inicio;
use App\Models\Sobre;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InicioController extends Controller
{
    public function index(){
        $inicio = Inicio::all();
        $sobre = Sobre::where('id', 1)->firstOrFail();
        $cualidad = cualidades::all();
        $facultad = Facultad::all();
        $asesor = Asesor::all();
        $contacto = Contacto::where('id', 1)->firstOrFail();
       //dd($inicio);
        return view('layouts.page', compact('inicio','sobre','cualidad','facultad','asesor','contacto'));
    }

    public function nosotros(){
        $sobre = Sobre::where('id', 1)->firstOrFail();
        $contacto = Contacto::where('id', 1)->firstOrFail();
        $cualidad = cualidades::all();
        $asesor = Asesor::all();
        return view('layouts.sobre', compact('sobre','cualidad','asesor','contacto'));
    }
    
    public function cursos(){
        $carrera = DB::select('SELECT f.titulo AS nombref, c.cantEstudiante,c.duracion, c.nombre 
        FROM cursos c 
        INNER JOIN facultads f on f.id = c.facultad_id');
        $facultad = Facultad::all();
        $contacto = Contacto::where('id', 1)->firstOrFail();
        return view('layouts.curso', compact('facultad','contacto','carrera'));
    }

    public function facultadC($id){

        $facultadc = DB::select(DB::raw('SELECT f.titulo AS nombref, 
        c.cantEstudiante,c.duracion, c.nombre 
        FROM cursos c 
        INNER JOIN facultads f on f.id = c.facultad_id where f.id = :id'), array('id'=>$id));
        //dd($facultadc);
        $nombre = DB::select(DB::raw('SELECT f.titulo
        FROM cursos c 
        INNER JOIN facultads f on f.id = c.facultad_id where f.id = :id LIMIT 1'), array('id'=>$id));

        //dd($nombre);
        $contacto = Contacto::where('id', 1)->firstOrFail();
        return view('layouts.facultad', compact('facultadc','contacto','nombre'));
        //    $products = DB::select( DB::raw('SELECT * FROM products WHERE id >= :from AND id <= :to; '), array('from'=>$de,'to'=>$hasta));
    }

    public function comunicate(){
        $contacto = Contacto::where('id', 1)->firstOrFail();
        return view('layouts.contacto', compact('contacto'));
    }
    public function create(){
        
        $inicio = Inicio::all();
        return view('adminP.inicio.mostrarInicio',compact('inicio') );
    }

    public function store(Request $request){
        
        
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

    public function update( Request $request, Inicio $inicio){
            $inicio->update($request->all());

    }
}
