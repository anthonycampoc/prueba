<?php

namespace Database\Seeders;

use App\Models\Empresa;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Foreach_;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            
        $data = [
            [
                'nombre' => 'CRUZ ROJA',
                'ruc' => '1234567895',
                'status' => 'ACTIVE'
            ],
            [
                'nombre' => 'CERTICURSA',
                'ruc' => '1234567893',
                'status' => 'ACTIVE'
            ],
        ];

        foreach ($data as $item) {
           Empresa::create($item);
        }
    }
}
