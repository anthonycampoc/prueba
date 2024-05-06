<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //

    public function index(){

        $permissions = Permission::all();
        return view('adminPC.rol.mostralRol',compact('permissions'));

    }

    public function store(Request $request, Role $role){

        $request->validate([
            'name'=>'required'
        ]);

       // dd($request->permisos);

      // $role = Role::create($request->all());

      /* $role->permissions()->sync($request->permisos);

        //$role->syncPermissions($request->input('permisos'));*/

        $permission = $request->input("permissions");
   

        /*if (is_array($permission)) {
            dd("BIEN");
        }else {
            dd("MAL");
        }*/

        $role->create($request->all());
        $role->syncPermissions($permission);

        //return redirect()->route('roles.index¨¿)->with("info","El rol se creo con exito");

            

    }
}
