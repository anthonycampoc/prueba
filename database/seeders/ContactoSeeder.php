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
<<<<<<< HEAD
            'direccion' => 'Calle 1 y Calle 2',
            'telefono' => '+593969510399',
            'correo' => 'renteria.krt@gmail.com',
=======
            'direccion' => 'Calle',
            'telefono' => '0991746106',
            'correo' => 'renteria@gmail.com',
            'imagen' => 'link'
>>>>>>> 0637721038f59771c48f2ce2cde90ad314143236
        ]);
    }
}
