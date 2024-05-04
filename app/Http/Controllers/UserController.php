<?php

namespace App\Http\Controllers;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();
        return view('adminPC.usuarios.mostrarUsuario', compact('users'));
    }

    public function edit($id)
    {
     
        $users = User::where('id', $id)->firstOrFail();
        $roles = Role::all();
        return view('adminPC.usuarios.editUsuario',compact('users','roles'));
    }

    public function update(Request $request, User $user)
    {
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index');

    }

   
}
