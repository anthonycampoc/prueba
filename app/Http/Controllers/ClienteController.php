<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    // Mostrar la lista de clientes
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes.index', compact('clientes'));
    }

    // Mostrar el formulario para crear un nuevo cliente
    public function create()
    {
        return view('clientes.create');
    }

    // Almacenar un nuevo cliente en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:clientes,email',
        ]);

        Cliente::create($request->all());
        return redirect()->route('clientes.index')
                        ->with('success','Cliente creado con éxito.');
    }

    // Mostrar un cliente específico
    public function show(Cliente $cliente)
    {
        return view('clientes.show', compact('cliente'));
    }

    // Mostrar el formulario para editar un cliente existente
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', compact('cliente'));
    }

    // Actualizar un cliente en la base de datos
    public function update(Request $request, Cliente $cliente)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required|email|unique:clientes,email,'.$cliente->id,
        ]);

        $cliente->update($request->all());
        return redirect()->route('clientes.index')
                        ->with('success','Cliente actualizado con éxito.');
    }

    // Eliminar un cliente de la base de datos
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect()->route('clientes.index')
                        ->with('success','Cliente eliminado con éxito.');
    }
}

