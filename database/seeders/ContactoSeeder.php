<?php

namespace Database\Seeders;

use App\Models\Contacto;
use Illuminate\Database\Seeder;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Contacto::create([
            'direccion' => 'Calle 1 y Calle 2',
            'telefono' => '+593969510399',
            'correo' => 'renteria.krt@gmail.com'
        ]);
    }
}
