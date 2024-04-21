<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'email',
        'telefono',
        'fecha_nacimiento',
        'provincia_id',
        'canton_id',
        'imagen',
        'link',
        'empresa_id'
    ];
}
