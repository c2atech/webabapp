<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    protected $fillable = [
        'imagem',
        'titulo',
    ];
}
