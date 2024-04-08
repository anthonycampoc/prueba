<?php

namespace Database\Seeders;

use App\Models\Inicio;
use Illuminate\Database\Seeder;

class InicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Inicio::create([
            'titulo' => 'Best Online Courses',
            'subtitulo' => 'The Best Online Learning Platform',
            'parrafo' => 'Vero elitr justo clita lorem. Ipsum dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd rebum sea sanctus eirmod elitr.',
            'nombreLink' => 'Read More',
            'link' => 'http://127.0.0.1:8000',
            'imagen' => 'page/img/carousel-1.jpg'

        ]);
       
    }
}
