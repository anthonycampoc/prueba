<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    protected $fillabel=[
        'nombre'
    ];

    public function asesor(){
        return $this->hasMany(asesor::class);
    }
}
