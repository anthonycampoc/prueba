<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // Asegúrate de importar el modelo Cliente
use App\Models\Asesor;
use App\Models\Canton;
use App\Models\Cursos;
use App\Models\Provincia;
use Illuminate\Support\Facades\DB;
use Auth;

class ClienteController extends Controller
{

    public function __construct(){
        $this->middleware('can:crear.cliente')->only('index');
    }
    // Mostrar la lista de clientes
    public function index()
    {
        $usuario = Auth::user();
        $nombreUsuario = $usuario->name;
        $clientes =  DB::select("SELECT cu.nombre AS carrera, ase.nombre_1 AS Anombre, ase.apellido_1 AS Aapellido,  c.nombre AS canton, p.nombre AS provincia,a.id, a.nombre_1, a.apellido_1, a.cedula, a.email,a.matriculado,a.telefono FROM clientes a 
        INNER JOIN provincias p on a.provincia_id = p.id 
        INNER JOIN cantons c on c.id = a.canton_id 
        INNER JOIN cursos cu on cu.id = a.carrera_id 
        INNER JOIN asesors ase on ase.id = a.asesor_id"); //trae los datos que tiene su estado activado
        $asesores = DB::select("SELECT * FROM asesors WHERE status ='ACTIVE' and adminAsesor = '2'");
        $carrera = DB::select("SELECT * FROM cursos WHERE status ='ACTIVE'");
        $provincia = Provincia::all();
        
        return view('adminPC.clientes.mostrarClientes', compact('clientes', 'asesores','carrera', 'provincia','nombreUsuario'));
    }

    // Mostrar el formulario para crear un nuevo cliente
    public function create()
    {
        
        return view('clientes.crearClientes');
    }

    // Almacenar un nuevo cliente en la base de datos
    public function store(Request $request)
    {
       // dd($request);
        
        $request->validate([
            'nombre_1' => 'required',
            'nombre_2' => 'required',
            'apellido_1' => 'required',
            'apellido_2' => 'required',
            'cedula' => 'required|digits:10|unique:clientes,cedula',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'required||digits:10|unique:clientes,telefono',
            'fecha_nacimiento' => 'required|date',
            'provincia_id' => 'required',
            'canton_id' => 'required',
            'asesor_id' => 'required',
            'carrera_id' => 'required',

            
        ]);

        Cliente::create($request->all());
        return redirect()->back()
                        ->with('success', 'Cliente creado con éxito.');
    }

    // Mostrar un cliente específico
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    // Mostrar el formulario para editar un cliente existente
    public function edit($id)
    {
        $usuario = Auth::user();
        $nombreUsuario = $usuario->name;
        $cliente = Cliente::findOrFail($id);
        $idProvincia = DB::select(DB::raw('SELECT provincia_id from clientes WHERE id = :id'), array('id'=>$id));
        foreach ($idProvincia as $item) {
            $canton =  DB::select(DB::raw('SELECT c.id, c.nombre from cantons c JOIN provincias p on p.id = c.provincia_id WHERE p.id = :id'), array('id'=>$item->provincia_id));
        }
        $provincia = Provincia::all();
        $carrera = Cursos::all();
        $asesores = DB::select("SELECT * FROM asesors WHERE status ='ACTIVE' and adminAsesor = '2'");
        return view('adminPC.clientes.editarCliente', compact('cliente','provincia','carrera', 'asesores', 'canton', 'nombreUsuario'));
    }

    // Actualizar un cliente en la base de datos
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre_1' => 'required',
            'nombre_2' => 'required',
            'apellido_1' => 'required',
            'apellido_2' => 'required',
            'cedula' => 'required|digits:10',
            'email' => 'required|email',
            'telefono' => 'required||digits:10',
            'fecha_nacimiento' => 'required|date',
            'provincia_id' => 'required',
            'canton_id' => 'required',
            'asesor_id' => 'required',
            'carrera_id' => 'required',
        ]);

        $cliente->update($request->all());
        return redirect()->route('cliente.index')
                        ->with('success', 'Cliente actualizado con éxito.');
    }

    // Eliminar un cliente de la base de datos
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index')
                        ->with('success', 'Cliente eliminado con éxito.');
    }

    public function CantonCliente(Request $request){
        $data = Canton::select('nombre','id')->where('provincia_id', $request->id)->take(100)->get();
        return response()->json($data);

    }
}

