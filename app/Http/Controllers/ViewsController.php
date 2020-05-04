<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class ViewsController extends Controller
{
    public function initial() {
        $categorias = Categoria::all();
        $total = count($categorias);

        return view('inicio', compact('categorias', 'total'));
    }

    public function tienda() {
        $categorias = Categoria::all();
        return view('tienda', compact('categorias'));
    }
}
