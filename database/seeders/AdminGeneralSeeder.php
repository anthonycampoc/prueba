<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class AdminGeneralSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'renteria.krt97@gmail.com',
            'password' => Hash::make('12345678') // Hasheo de contraseña
        ])->assignRole('adminGeneral');

        User::factory(9)->create();
    }
}
