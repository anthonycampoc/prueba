<?php

namespace Database\Seeders;

use App\Models\cualidades;
use Illuminate\Database\Seeder;

class CualidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        cualidades::create([
            'titulo' => 'Liderazgo Efectivo',
            'parrafo1' => 'El liderazgo efectivo es clave para cualquier organización exitosa. Un buen líder no solo dirige, sino que también inspira y motiva al equipo',
            'imagen' => 'img/ejemplo-liderazgo.jpg',
            'status' => 'ACTIVE'
        ]);
    }
}
