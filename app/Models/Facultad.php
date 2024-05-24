<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'imagen',
        'status'
    ];

    public function carrera(){
        return $this->hasMany(Cursos::class);
    }
}
