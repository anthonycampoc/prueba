<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();

        $this->call(InicioSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(SobreSeeder::class);
        $this->call(CualidadesSeeder::class);
        $this->call(ContactoSeeder::class);
        $this->call(ProvinciaSeeder::class);
        $this->call(CantonSeeder::class);
       $this->call(FacultadSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(AsesorSeeder::class);
        //$this->call(ClienteSeeder::class);
       



    }
}
