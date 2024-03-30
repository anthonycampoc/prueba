<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


    // Permisos para el CRUD de usuarios
    $permisos = [
        'crear usuarios',
        'ver usuarios',
        'actualizar usuarios',
        'eliminar usuarios'
    ];

    foreach ($permisos as $permiso) {
        Permission::create(['name' => $permiso]);
    }

class RoleSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdminGeneral = Role::create(['name' => 'adminGeneral']);
        $roleAdminVendedores = Role::create(['name' => 'adminVendedores']);
        $roleVendedores = Role::create(['name' => 'vendedores']);

        
        // Asignar todos los permisos al rol adminGeneral
        $roleAdminGeneral->givePermissionTo(Permission::all());

        // Asignar permisos relacionados con vendedores y clientes al rol adminVendedores
        $roleAdminVendedores->givePermissionTo('crear usuarios');
        $roleAdminVendedores->givePermissionTo('ver usuarios');
        $roleAdminVendedores->givePermissionTo('actualizar usuarios');
        $roleAdminVendedores->givePermissionTo('eliminar usuarios');

        // Asignar permisos relacionados solo con clientes al rol vendedor
        $roleVendedor->givePermissionTo('crear usuarios');
        $roleVendedor->givePermissionTo('ver usuarios');
        $roleVendedor->givePermissionTo('actualizar usuarios');
        $roleVendedor->givePermissionTo('eliminar usuarios');

    }
}
