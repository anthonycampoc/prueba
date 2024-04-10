<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cualidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'parrafo1',
        'imagen',
    ];
}
