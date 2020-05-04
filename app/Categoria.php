<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function getUrlPathAttribute() {
        return \Storage::url($this->path);
    }
}
