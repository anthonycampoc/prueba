<?php

namespace Database\Seeders;

use App\Models\Asesor;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class AsesorSeeder extends Seeder
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
                'email' => $faker->safeEmail,
                'status' => 'ACTIVE',
                'telefono' => $faker->phoneNumber,
                'fecha_nacimiento' => $faker->date('Y-m-d'),
                'imagen' => 'team-4.jpg', // Replace with actual image path
                'link' => $faker->url,
                'provincia_id' => rand(1,3), // Random province ID between 1 and 5
                'canton_id' => rand(1,5), // Fixed canton ID to 1
                'empresa_id' => rand(1, 2) // Random company ID between 1 and 2
            ];
        }

        foreach ($data as $item) {
            Asesor::create($item);
        }
    }
}
