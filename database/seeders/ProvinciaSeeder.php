<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $provincias = [
            [
                'nombre' => 'Azuay',
            ],
            [
                'nombre' => 'Bolívar',
            ],
            [
                'nombre' => 'Cañar',
            ],
            [
                'nombre' => 'Carchi',
            ],
            [
                'nombre' => 'Chimborazo',
            ],
            [
                'nombre' => 'Cotopaxi',
            ],
            [
                'nombre' => 'El Oro',
            ],
            [
                'nombre' => 'Esmeraldas',
            ],
            [
                'nombre' => 'Galápagos',
            ],
            [
                'nombre' => 'Guayas',
            ],
            [
                'nombre' => 'Imbabura',
            ],
            [
                'nombre' => 'Loja',
            ],
            [
                'nombre' => 'Los Ríos',
            ],
            [
                'nombre' => 'Manabí',
            ],
            [
                'nombre' => 'Morona Santiago',
            ],
            [
                'nombre' => 'Napo',
            ],
            [
                'nombre' => 'Orellana',
            ],
            [
                'nombre' => 'Pastaza',
            ],
            [
                'nombre' => 'Pichincha',
            ],
            [
                'nombre' => 'Santa Elena',
            ],
            [
                'nombre' => 'Sucumbíos',
            ],
            [
                'nombre' => 'Tungurahua',
            ],
            [
                'nombre' => 'Zamora Chinchipe',
            ],
            [
                'nombre' => 'Santo Domingo de los Tsáchilas',
            ],
        ];

        foreach ($provincias as $item) {
            Provincia::create($item);
        }
        

      
    }
}
