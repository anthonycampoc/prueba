<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;

    protected $fillabel=[
        'nombre',
        'provincia_id'
    ];

    public function asesor(){
        return $this->hasMany(asesor::class);
    }
}
