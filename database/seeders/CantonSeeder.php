<?php

namespace Database\Seeders;

use App\Models\Canton;
use Illuminate\Database\Seeder;

class CantonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantones = [
            [
                'nombre' => 'Atacames',
                'provincia_id' => 1, // Changed to 1 for your request
            ],
            [
                'nombre' => 'Muisne',
                'provincia_id' => 1, // Changed to 1 for your request
            ],
            [
                'nombre' => 'Rioverde',
                'provincia_id' => 1, // Changed to 1 for your request
            ],
            [
                'nombre' => 'San Lorenzo',
                'provincia_id' => 1, // Changed to 1 for your request
            ],
            [
                'nombre' => 'Eloy Alfaro',
                'provincia_id' => 1, // Changed to 1 for your request
            ],
            [
                'nombre' => 'Quinindé',
                'provincia_id' => 1, // Changed to 1 for your request
            ],
            [
                'nombre' => 'Esmeraldas',
                'provincia_id' => 1, // Changed to 1 for your request
            ],
            [
                'nombre' => 'Bolívar',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Chone',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'El Carmen',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Flavio Alfaro',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Jama',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Jaramijó',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Jipijapa',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Junín',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Manta',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Montecristi',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Olmedo',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Paján',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Pedernales',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Portoviejo',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Puerto López',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Rocafuerte',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'San Vicente',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Santa Ana',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Sucre',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Tosagua',
                'provincia_id' => 2,
            ],
            [
                'nombre' => 'Veinticuatro de Mayo',
                'provincia_id' => 2,
            ],

            [
                'nombre' => 'Santo Domingo',
                'provincia_id' => 3,
            ],
            [
                'nombre' => 'La Concordia',
                'provincia_id' => 3,
            ]
        ];

        foreach ($cantones as $item) {
            Canton::create($item);
        }
    }
}
