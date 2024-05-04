<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RoleSeeder extends Seeder
{

    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleAdminGeneral = Role::create(['name' => 'administador']);
        $roleAdminAsesor = Role::create(['name' => 'adminAsesor']);
        $roleVendedores = Role::create(['name' => 'Asesor']);
        $roleCapacitador = Role::create(['name' => 'Capacitador']);


        Permission::create(['name'=>'ver.menu'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);

        Permission::create(['name'=>'crear.asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);
        Permission::create(['name'=>'editar.asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);
        Permission::create(['name'=>'ver.asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);
        Permission::create(['name'=>'actualizar.asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);
        
        Permission::create(['name'=>'crear.cliente'])->syncRoles([$roleAdminGeneral]);
        Permission::create(['name'=>'editar.cliente'])->syncRoles([$roleAdminGeneral]);
        Permission::create(['name'=>'ver.cliente'])->syncRoles([$roleAdminGeneral]);
        Permission::create(['name'=>'actualizar.cliente'])->syncRoles([$roleAdminGeneral]);
        
        Permission::create(['name'=>'matricula.cliente'])->syncRoles([$roleAdminGeneral, $roleVendedores,$roleAdminAsesor]);

    }
}
