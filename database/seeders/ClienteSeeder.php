<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = FakerFactory::create();

        // Define the array of data
        $data = [];

        // Generate 10 users with random data
        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'nombre_1' => $faker->name,
                'nombre_2' => $faker->name,
                'apellido_1' => $faker->lastName,
                'apellido_2' => $faker->lastName,
                'cedula' => $faker->unique()->randomNumber(8),
                'estado' => 'ACTIVE',
                'matriculado' => 'ACTIVE',
                'email' => $faker->safeEmail,
                'telefono' => $faker->phoneNumber,
                'fecha_nacimiento' => $faker->date('Y-m-d'),
                'provincia_id' => rand(1,3), // Random province ID between 1 and 5
                'canton_id' => rand(1,5), // Fixed canton ID to 1
                'carrera_id' => rand(1, 3), // Random company ID between 1 and 2
                'asesor_id' => rand(1, 5) // Random company ID between 1 and 2
            ];
        }

        foreach ($data as $item) {
            Cliente::create($item);
        }
    }
}
