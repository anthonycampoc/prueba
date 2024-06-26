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



class PaginaController extends Controller
{
    public function index(){
        $inicio = DB::select("SELECT * FROM inicios WHERE status ='ACTIVE'");
        $sobre = Sobre::where('id', 1)->firstOrFail();
        $cualidad = DB::select("SELECT * FROM cualidades WHERE status ='ACTIVE'");
        $redes = DB::select("SELECT * FROM redes WHERE status ='ACTIVE'");
        $facultad = DB::select("SELECT * FROM facultads WHERE status ='ACTIVE'");
        $asesor = DB::select("SELECT * FROM asesors WHERE status ='ACTIVE'and adminAsesor = '2'");
        $contacto = Contacto::where('id', 1)->firstOrFail();

        return view('layouts.page', compact('inicio','sobre','cualidad','facultad','asesor','contacto', 'redes'));
    }

    public function nosotros(){
        $sobre = Sobre::where('id', 1)->firstOrFail();
        $contacto = Contacto::where('id', 1)->firstOrFail();
        $cualidad = DB::select("SELECT * FROM cualidades WHERE status ='ACTIVE'");
        $asesor = DB::select("SELECT * FROM asesors WHERE status ='ACTIVE' and adminAsesor = '2'");
        $redes = DB::select("SELECT * FROM redes WHERE status ='ACTIVE'");
        return view('layouts.sobre', compact('sobre','cualidad','asesor','contacto','redes'));
    }

    public function cursos(){
        $carrera = DB::select('SELECT f.titulo AS nombref, c.cantEstudiante,c.duracion, c.nombre, c.imagen 
        FROM cursos c 
        INNER JOIN facultads f on f.id = c.facultad_id WHERE c.status = "ACTIVE" ');
        $facultad = Facultad::all();
        $contacto = Contacto::where('id', 1)->firstOrFail();
        $redes = DB::select("SELECT * FROM redes WHERE status ='ACTIVE'");
        return view('layouts.curso', compact('facultad','contacto','carrera','redes'));
    }

    
    public function facultadC($id){

        $facultadc = DB::select(DB::raw('SELECT f.titulo AS nombref, c.imagen,
        c.cantEstudiante,c.duracion, c.nombre 
        FROM cursos c 
        INNER JOIN facultads f on f.id = c.facultad_id where f.id = :id and c.status = "ACTIVE" '), array('id'=>$id));
        //dd($facultadc);
        $nombre = DB::select(DB::raw('SELECT f.titulo
        FROM cursos c 
        INNER JOIN facultads f on f.id = c.facultad_id where f.id = :id LIMIT 1'), array('id'=>$id));
         $redes = DB::select("SELECT * FROM redes WHERE status ='ACTIVE'");

        //dd($nombre);
        $contacto = Contacto::where('id', 1)->firstOrFail();
        return view('layouts.facultad', compact('facultadc','contacto','nombre', 'redes'));
        //    $products = DB::select( DB::raw('SELECT * FROM products WHERE id >= :from AND id <= :to; '), array('from'=>$de,'to'=>$hasta));
    }

    public function comunicate(){
        $contacto = Contacto::where('id', 1)->firstOrFail();
        $redes = DB::select("SELECT * FROM redes WHERE status ='ACTIVE'");
        return view('layouts.contacto', compact('contacto','redes'));
    }
}
