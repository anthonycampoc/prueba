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



        $permission = $request->input("permissions");
       // dd($permission[0]);
   
        /*if (is_array($permission)) {
            dd("BIEN");
        }else {
            dd("MAL");
        }*/

        //$data = implode(" ", $permission);
        $data = var_dump(implode($permission));
       // dd($data);
        $role->create($request->all());
        $role->permissions()->sync($data);
        //$role->syncPermissions($permission);

        //return redirect()->route('roles.index¨¿)->with("info","El rol se creo con exito");

            

    }
}
