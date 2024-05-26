<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Auth;

class RolController extends Controller
{
    public function __construct(){
        $this->middleware('can:crear.rol')->only('index');
    }

    public function index(){
        $nombreUsuario = Auth::user()->name;
        $permissions = Permission::all();
        return view('adminPC.rol.mostralRol',compact('permissions','nombreUsuario'));

    }

    public function store(Request $request, Role $role){
        $request->validate([
            'name' => 'required'
        ]);

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($request->input('permissions'));

        return redirect()->back();
    }
}
