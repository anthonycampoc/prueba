<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'admin',
            'email'=>'admin@hotmail.com',
            'status' => 'ACTIVE',
            'password'=>bcrypt('admin'),

        ])->assignRole('administador');

        User::create([
            'name'=>'adminasesor',
            'email'=>'adminasesor@hotmail.com',
            'status' => 'ACTIVE',
            'password'=>bcrypt('admin'),

        ])->assignRole('adminAsesor');

        User::create([
            'name'=>'asesor',
            'email'=>'asesor@hotmail.com',
            'status' => 'ACTIVE',
            'password'=>bcrypt('admin'),

        ])->assignRole('Asesor');

      
    }
}
