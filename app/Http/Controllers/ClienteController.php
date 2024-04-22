<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente; // Asegúrate de importar el modelo Cliente
use App\Models\Asesor;
use App\Models\Canton;
use App\Models\Cursos;
use App\Models\Provincia;

class ClienteController extends Controller
{
    // Mostrar la lista de clientes
    public function index()
    {
        $clientes = Cliente::all();
        $asesores = Asesor::all();
        $carrera = Cursos::all();
        $provincia = Provincia::all();
        return view('adminPC.clientes.mostrarClientes', compact('clientes', 'asesores','carrera', 'provincia'));
    }

    // Mostrar el formulario para crear un nuevo cliente
    public function create()
    {
        return view('clientes.crearClientes');
    }

    // Almacenar un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required',
            'cedula' => 'required|unique:clientes,cedula',
            'email' => 'required|email|unique:clientes,email',
            'telefono' => 'required',
            /*'fecha_nacimiento' => 'required|date',
            'provincia' => 'required',
            'canton' => 'required',
            'parroquia' => 'required',*/
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
    public function edit(Cliente $cliente)
    {
        return view('clientes.editarCliente', compact('cliente'));
    }

    // Actualizar un cliente en la base de datos
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:clientes,cedula,' . $cliente->id,
            'email' => 'required|email|unique:clientes,email,' . $cliente->id,
            'telefono' => 'required',
            /*'fecha_nacimiento',
            'provincia',
            'canton',
            'parroquia',*/
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

