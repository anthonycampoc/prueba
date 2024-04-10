<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sobre extends Model
{
    use HasFactory;

    protected $fillable =[
        'parrafo1',
        'parrafo2',
        'tituloLink',
        'link',
    ];
}
