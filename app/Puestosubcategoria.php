<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puestosubcategoria extends Model
{
    protected $fillable = [
        'subcategoria_id', 'puesto_id'
    ];
}
