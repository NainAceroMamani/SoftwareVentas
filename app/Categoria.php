<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function getUrlPathAttribute() {
        return \Storage::url($this->path);
    }

    public function subcategorias()
    {
        return $this->hasMany('App\Subcategoria');
    }
}
