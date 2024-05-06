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
        $roleAdminGeneral = Role::create(['name' => 'administador']);/*TODO ACCESO*/ 
        $roleAdminAsesor = Role::create(['name' => 'adminAsesor']);/*CRUD DE ASESOR || VERIFICACION DEL ARCHIVO DE MATRICULA|| EDITAR Y ACTUALIAZAR ESTADO*/ 
        $roleVendedores = Role::create(['name' => 'Asesor']);/*CREAR CLIENTE Y MATRICULAR*/



       //permisos para web 

       Permission::create(['name'=>'crear.inicio', 'description'=>'Crear una nueva noticia'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'editar.inicio', 'description'=>'editar noticia'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'ver.inicio', 'description'=>'ver noticia'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'desactivar.inicio', 'description'=>'desactivar noticias'])->syncRoles([$roleAdminGeneral]);

       Permission::create(['name'=>'crear.rol', 'description'=>'Crear nuevo Rol'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'editar.rol', 'description'=>'editar Rol'])->syncRoles([$roleAdminGeneral]);
   

       
       Permission::create(['name'=>'crear.cualidades', 'description'=>'crear nueva cualidad'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'editar.cualidades','description'=>'editar cualidad'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'ver.cualidades', 'description'=>'ver cualidad'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'desactivar.cualidades','description'=>'desactivar cualidad'])->syncRoles([$roleAdminGeneral]);

       Permission::create(['name'=>'editar.sobre', 'description'=>'editar Sobre Nosotros'])->syncRoles([$roleAdminGeneral]);

       Permission::create(['name'=>'crear.carrera', 'description'=>'crear nueva carrera'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'editar.carrera', 'description'=>'editar carrera'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'ver.carrera', 'description'=>'ver carrera'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'desactivar.carrera',  'description'=>'desactivar carrera'])->syncRoles([$roleAdminGeneral]);

       Permission::create(['name'=>'crear.facultad' , 'description'=>'crear nueva facultad'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'editar.facultad' , 'description'=>'editar facultad'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'ver.facultad'  , 'description'=>'ver facultad'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'desactivar.facultad' , 'description'=>'desactivar facultad'])->syncRoles([$roleAdminGeneral]);

    
       Permission::create(['name'=>'editar.contacto' , 'description'=>'editar informacion de la empresa'])->syncRoles([$roleAdminGeneral]);

       Permission::create(['name'=>'crear.redes' , 'description'=>'crear nueva red social'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'editar.redes' , 'description'=>'editar red social'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'ver.redes', 'description'=>'ver red social'])->syncRoles([$roleAdminGeneral]);
       Permission::create(['name'=>'desactivar.redes', 'description'=>'desactivar red social'])->syncRoles([$roleAdminGeneral]);


       
        Permission::create(['name'=>'crear.asesor' , 'description'=>'crear nuevo asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);
        Permission::create(['name'=>'editar.asesor' , 'description'=>'editar asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);
        Permission::create(['name'=>'ver.asesor', 'description'=>'ver asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);
        Permission::create(['name'=>'desactivar.asesor', 'description'=>'desactivar asesor'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);

        Permission::create(['name'=>'ver.usuario','description'=>'ver usuario'])->syncRoles([$roleAdminGeneral]);
        Permission::create(['name'=>'editar.usuario','description'=>' editar rol de usuario'])->syncRoles([$roleAdminGeneral]);
        Permission::create(['name'=>'desactivar.usuario','description'=>'desactivar usuario'])->syncRoles([$roleAdminGeneral]);
      
        Permission::create(['name'=>'crear.matricula','description'=>' crear matricula'])->syncRoles([$roleAdminGeneral,$roleVendedores]);
        Permission::create(['name'=>'ver.matricula','description'=>' visualizar matricula'])->syncRoles([$roleAdminGeneral,$roleAdminAsesor]);

        
        Permission::create(['name'=>'crear.cliente','description'=>' crear cliente'])->syncRoles([$roleAdminGeneral,$roleVendedores]);
        Permission::create(['name'=>'editar.cliente','description'=>' editar cliente'])->syncRoles([$roleAdminGeneral]);
        Permission::create(['name'=>'ver.cliente','description'=>' ver cliente'])->syncRoles([$roleAdminGeneral]);
        Permission::create(['name'=>'desactivar.cliente','description'=>' desactivar cliente'])->syncRoles([$roleAdminGeneral]);
        
       

    }
}
