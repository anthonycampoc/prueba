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
                'nombre'=>'Esmeraldas'
            ],
            [
                'nombre'=>'Manabi'
            ],
            [
                'nombre'=>'Santo Domingo'
            ],
        ];

        foreach ($provincias as $item) {
            Provincia::create($item);
        }
        

      
    }
}
