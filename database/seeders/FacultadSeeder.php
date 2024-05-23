<?php

namespace Database\Seeders;

use App\Models\Facultad;
use Illuminate\Database\Seeder;

class FacultadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data = [
            [
                'titulo' => 'Ingeniería Civil', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
            
            ],
            [
                'titulo' => 'Administración de Empresas', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
                
            ],
            [
                'titulo' => 'Derecho', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
              
            ],
            [
                'titulo' => 'Psicología', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
            
            ],
            [
                'titulo' => 'Contaduría Pública', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
            ],
            // Agrega más facultades aquí
        ];

        foreach ($data as $item) {
            Facultad::create($item);
        }
    }
}
