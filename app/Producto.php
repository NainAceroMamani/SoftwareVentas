<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
        'id', 'name_prod', 'precio_prod', 'stock_prod', 'desc_prod', 'puesto_id'
    ];
}
