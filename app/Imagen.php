<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    protected $fillable = [
        'url_imagen', 'producto_id'
    ];
}