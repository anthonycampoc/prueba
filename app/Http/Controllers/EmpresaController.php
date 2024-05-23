<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa; // Asegúrate de importar el modelo Empresa
use Illuminate\Support\Facades\DB;

class EmpresaController extends Controller
{
    

    // Mostrar el formulario para crear una nueva empresa
    public function create()
    {
        $empresaA =  DB::select("SELECT * FROM empresas WHERE status ='ACTIVE'"); //trae los datos que tiene su estado activado
        $empresaD =  DB::select("SELECT * FROM empresas WHERE status ='DEACTIVATE'");
        return view('adminPC.empresa.mostrarEmpresa', compact('empresaA', 'empresaD'));
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
            'ruc' => 'required'
            
        ]);
        $empresa->update($request->all());
       
        return redirect()->route('empresa.create');
                     
    }

    public function EstadoEmpresa($id){
        $estado = DB::select(DB::raw('SELECT e.status from  empresas  e WHERE e.id = :id'), array('id'=>$id));

        foreach ($estado as $item) {
           if ($item->status == 'DEACTIVATE') {
                DB::select(DB::raw('UPDATE empresas set status ="ACTIVE" WHERE id  = :id'), array('id'=>$id));
            }else if ($item->status == 'ACTIVE') {
                DB::select(DB::raw('UPDATE empresas set status ="DEACTIVATE" WHERE id  = :id'), array('id'=>$id));
            }
        }
        return redirect()->back();

    }

  
}

