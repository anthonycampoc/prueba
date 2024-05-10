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
                'nombreLink' => 'Más sobre Ingeniería Civil', // Cambia el texto
                'link' => 'https://www.example.com/ingenieria-civil', // Cambia el enlace
                'status' => 'ACTIVE'
            ],
            [
                'titulo' => 'Administración de Empresas', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
                'nombreLink' => 'Más sobre Administración de Empresas', // Cambia el texto
                'link' => 'https://www.example.com/administracion-empresas', // Cambia el enlace
                'status' => 'ACTIVE'
            ],
            [
                'titulo' => 'Derecho', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
                'nombreLink' => 'Más sobre Derecho', // Cambia el texto
                'link' => 'https://www.example.com/derecho', // Cambia el enlace
                'status' => 'ACTIVE'
            ],
            [
                'titulo' => 'Psicología', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
                'nombreLink' => 'Más sobre Psicología', // Cambia el texto
                'link' => 'https://www.example.com/psicologia', // Cambia el enlace
                'status' => 'ACTIVE'
            ],
            [
                'titulo' => 'Contaduría Pública', // Cambia el nombre por el que deseas
                'imagen' => '20240418202332.jpg',
                'nombreLink' => 'Más sobre Contaduría Pública', // Cambia el texto
                'link' => 'https://www.example.com/contabilidad-publica', // Cambia el enlace
                'status' => 'ACTIVE'
            ],
            // Agrega más facultades aquí
        ];

        foreach ($data as $item) {
            Facultad::create($item);
        }
    }
}
