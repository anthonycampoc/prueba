<?php

namespace Database\Seeders;

use App\Models\Redes;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class SeederRedes extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = FakerFactory::create();
       $data= [];

       for ($i=0; $i < 5 ; $i++) { 

        $data[] = [
            'status' => "ACTIVE" ,
            'nombre' =>$faker->name  ,
            'link' => $faker->url,
            'icono' => $faker->url ,

        ];
       }

       foreach ($data as $item) {
        Redes::create($item);
       }
    }
}
