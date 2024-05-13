<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $fillable =[
        'nombre',
        'ruc',
        'status'
        
        
    ];

    public function asesor(){
        return $this->hasMany(asesor::class);
    }
}
