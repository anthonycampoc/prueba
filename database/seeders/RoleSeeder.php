<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


    // Permisos para el CRUD de usuarios
    $permisos = [

        'crear.admin.vendedores',
        'ver.admin.vendedores',
        'actualizar.admin.vendedores',
        'eliminar.admin.vendedores',

        'crear.vendedores',
        'ver.vendedores',
        'actualizar.vendedores',
        'eliminar.vendedores',

        'crear.clientes',
        'ver.clientes',
        'actualizar.clientes',
        'eliminar.clientes'
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
        $roleAdminVendedores->givePermissionTo('crear.vendedores');
        $roleAdminVendedores->givePermissionTo('ver.vendedores');
        $roleAdminVendedores->givePermissionTo('actualizar.vendedores');
        $roleAdminVendedores->givePermissionTo('eliminar.vendedores');

        // Asignar permisos relacionados solo con clientes al rol vendedor
        $roleVendedores->givePermissionTo('crear.clientes');
        $roleVendedores->givePermissionTo('ver.clientes');
        $roleVendedores->givePermissionTo('actualizar.clientes');
        $roleVendedores->givePermissionTo('eliminar.clientes');

    }
}
