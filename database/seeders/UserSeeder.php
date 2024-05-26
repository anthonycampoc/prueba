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
            'name'=>'Administrador',
            'email'=>'admin@itecsurcosta.com',
            'status' => 'ACTIVE',
            'password'=>bcrypt('A1T3cs4rc0sT4@'),

        ])->assignRole('administador');

        User::create([
            'name'=>'Finanzas',
            'email'=>'finanzas@itecsurcosta.com',
            'status' => 'ACTIVE',
            'password'=>bcrypt('F1T3cs4rc0sT4@'),

        ])->assignRole('administador');

        User::create([
            'name'=>'Marketing',
            'email'=>'marketing@itecsurcosta.com',
            'status' => 'ACTIVE',
            'password'=>bcrypt('M1T3cs4rc0sT4@'),

        ])->assignRole('administador');

      
    }
}
