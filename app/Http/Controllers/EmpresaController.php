<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; // Asegúrate de importar el modelo Empresa

class EmpresaController extends Controller
{
    

    // Mostrar el formulario para crear una nueva empresa
    public function create()
    {
        $empresa = Empresa::all();
        return view('adminPC.empresa.mostrarEmpresa', compact('empresa'));
    }

    // Almacenar una nueva empresa en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ruc' => 'required|unique:empresas,ruc'
            // Agrega más validaciones si son necesarias
        ]);

        Empresa::create($request->all());
        return redirect()->back()
                        ->with('success', 'Empresa creada con éxito.');
    }

    // Mostrar el formulario para editar una empresa existente
    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('adminPC.empresa.editarEmpresa', compact('empresa'));
    }

    // Actualizar una empresa en la base de datos
    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'nombre' => 'required',
            'ruc' => 'required|unique:empresa,ruc,' . $empresa->id,
            // Agrega más validaciones si son necesarias
        ]);

        $empresa->update($request->all());
        return redirect()->route('empresa.index')
                        ->with('success', 'Empresa actualizada con éxito.');
    }

    // Eliminar una empresa de la base de datos
    public function destroy(Empresa $empresa)
    {
        $empresa->delete();
        return redirect()->route('empresa.index')
                        ->with('success', 'Empresa eliminada con éxito.');
    }
}

