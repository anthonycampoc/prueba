<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //

    public function index(){

        $permisos = Permission::all();
        return view('adminPC.rol.mostralRol',compact('permisos'));

    }

    public function store(Request $request){

            

    }
}
