<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asesor extends Model
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
        'status',
        'fecha_nacimiento',
        'provincia_id',
        'canton_id',
        'imagen',
        'link',
        'empresa_id'
    ];

    public function provincia(){
        return $this->belongsTo(provincia::class);
    }

    public function canton(){
        return $this->belongsTo(canton::class);
    }

    public function empresa(){
        return $this->belongsTo(empresa::class);
    }

    public function estudiante(){
        return $this->hasMany(Cliente::class);
    }
}
