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
            'direccion' => 'Calle',
            'telefono' => '0991746106',
            'correo' => 'renteria@gmail.com',
            'imagen' => 'link'
        ]);
    }
}
