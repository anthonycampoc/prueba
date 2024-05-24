<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function __construct(){
        $this->middleware('can:crear.rol')->only('index');
    }

    public function index(){

        $permissions = Permission::all();
        return view('adminPC.rol.mostralRol',compact('permissions'));

    }

   /* public function store2(Request $request, Role $role){

        $request->validate([
            'name'=>'required'
        ]);

        $permission = $request->input("permissions");
        $data = var_dump(implode($permission));
        $role->create($request->all());
        $role->permissions()->sync($data);
    
    }*/

    /*public function store(Request $request, Role $role){
        $request->validate([
            'name' => 'required'
        ]);
    
        $permissions = $request->input("permissions");
        dd($permissions);
        // Asumiendo que $permissions es un array y quieres convertirlo en una cadena
        // para almacenar en la base de datos o realizar alguna otra operación.
        $data = implode(' ', $permissions); // Une los elementos del array con comas.
    
        $role = $role->create($request->all()); // Crea el rol y obtiene la instancia creada.
        $role->permissions()->sync($data); // Sincroniza las permisos con el rol.
    
        // ... resto del código
    }*/

    public function store(Request $request, Role $role){
        $request->validate([
            'name' => 'required'
        ]);

        //dd($request->input('permissions'));
    
        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permissions'));

        return redirect()->back();
    }
}
