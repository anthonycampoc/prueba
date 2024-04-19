<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor; // Asegúrate de importar el modelo Vendedor

class VendedorController extends Controller
{
    // Mostrar la lista de vendedores
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('adminPC.vendedores.mostrarVendedores', compact('vendedores'));
    }

    // Mostrar el formulario para crear un nuevo vendedor
    public function create()
    {
        return view('vendedores.crearVendedor');
    }

    // Almacenar un nuevo vendedor en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:vendedores,cedula',
            'email' => 'required|email|unique:vendedores,email',
            'telefono' => 'required',
            // Agrega más validaciones si son necesarias
        ]);

        Vendedor::create($request->all());
        return redirect()->back()
                        ->with('success', 'Vendedor creado con éxito.');
    }

    // Mostrar un vendedor específico
    public function show(Vendedor $vendedor)
    {
        return view('vendedores.show', compact('vendedor'));
    }

    // Mostrar el formulario para editar un vendedor existente
    public function edit(Vendedor $vendedor)
    {
        return view('vendedores.editarVendedor', compact('vendedor'));
    }

    // Actualizar un vendedor en la base de datos
    public function update(Request $request, Vendedor $vendedor)
    {
        $request->validate([
            'nombre' => 'required',
            'cedula' => 'required|unique:vendedores,cedula,' . $vendedor->id,
            'email' => 'required|email|unique:vendedores,email,' . $vendedor->id,
            'telefono' => 'required',
            // Agrega más validaciones si son necesarias
        ]);

        $vendedor->update($request->all());
        return redirect()->route('vendedor.index')
                        ->with('success', 'Vendedor actualizado con éxito.');
    }

    // Eliminar un vendedor de la base de datos
    public function destroy(Vendedor $vendedor)
    {
        $vendedor->delete();
        return redirect()->route('vendedor.index')
                        ->with('success', 'Vendedor eliminado con éxito.');
    }
}

