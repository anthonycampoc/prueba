<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cursos extends Model
{
    use HasFactory;

    protected $fillable =[
        'nombre',
        'cantEstudiante',
        'duracion',
        'facultad_id',
        'imagen',
        'status'
        
    ];

    public function estudiante(){
        return $this->hasMany(Cliente::class);
    }
}
