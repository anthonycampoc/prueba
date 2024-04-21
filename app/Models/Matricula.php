<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $fillable =[
        'empresa_id',
        'asesor_id',
        'cliente_id',
        'carrera_id',
        'fecha_matricula',
        'pdf'
    ];
}
