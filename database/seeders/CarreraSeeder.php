<?php

namespace Database\Seeders;

use App\Models\Cursos;
use Illuminate\Database\Seeder;

class CarreraSeeder extends Seeder
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
                'nombre' => 'Ingeniería Civil',
                'cantEstudiante' => '100',
                'duracion' => '5',
                'imagen' => '20240418202332.jpg',
                'facultad_id' => '1'
            ],
            [
                'nombre' => 'Administración de Empresas',
                'cantEstudiante' => '150',
                'duracion' => '4',
                'imagen' => '20240418202332.jpg',
                'facultad_id' => '2'
            ],
            [
                'nombre' => 'Derecho',
                'cantEstudiante' => '80',
                'duracion' => '5',
                'imagen' => '20240418202332.jpg',
                'facultad_id' => '3'
            ],
            [
                'nombre' => 'Psicología',
                'cantEstudiante' => '120',
                'duracion' => '4',
                'imagen' => '20240418202332.jpg',
                'facultad_id' => '2'
            ],
            [
                'nombre' => 'Contaduría Pública',
                'cantEstudiante' => '90',
                'duracion' => '4',
                'imagen' => '20240418202332.jpg',
                'facultad_id' => '5'
            ],
            // Agrega 15 más facultades con la misma estructura
            [
                'nombre' => 'Facultad 16',
                'cantEstudiante' => '100',
                'duracion' => '4',
                'imagen' => '20240418202332.jpg',
                'facultad_id' => '4'
            ],
            // ...
            [
                'nombre' => 'Facultad 20',
                'cantEstudiante' => 120,
                'duracion' => '5',
                'imagen' => '20240418202332.jpg',
                'facultad_id' => '5'
            ],
        ];

        foreach ($data as $item) {
            Cursos::create($item);
        }

    }
}
