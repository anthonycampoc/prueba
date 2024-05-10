<?php

namespace Database\Seeders;

use App\Models\Sobre;
use Illuminate\Database\Seeder;

class SobreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sobre::create([
            'parrafo1' => 'Explora el mundo de la tecnología con nuestros artículos expertos.',
            'parrafo2' => 'Descubre las últimas tendencias y consejos en el campo de la informática.',
            'tituloLink' => 'Leer más',
            'link' => 'http://127.0.0.1:8000',
            // Asegúrate de tener una columna 'imagen' en tu modelo si planeas usarla
            'imagen' => 'ruta/a/tu/imagen.jpg',
            'status' => 'ACTIVE'
        ]);
    }
}
