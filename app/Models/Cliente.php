<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cliente;


class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nombre',
        'cedula',
        'email',
        'telefono',
        'fecha_nacimiento',
        'provincia',
        'canton',
        'parroquia',
        'asesor_id',
        'carrera_id'
    ];
}