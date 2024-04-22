<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;


class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [

        'nombre_1',
        'nombre_2',
        'apellido_1',
        'apellido_2',
        'cedula',
        'email',
        'telefono',
        'fecha_nacimiento',
        'provincia_id',
        'canton_id',
        'asesor_id',
        'carrera_id'
    ];
}