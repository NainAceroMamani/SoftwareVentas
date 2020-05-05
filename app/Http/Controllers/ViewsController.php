<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Puesto;

class ViewsController extends Controller
{
    public function initial() {
        $categorias = Categoria::all();
        $total = count($categorias);

        return view('inicio', compact('categorias', 'total'));
    }

    public function tienda() {
        $categorias = Categoria::all();
        $puestos = Puesto::paginate(12);
        return view('tienda', compact('categorias', 'puestos'));
    }

    public function detail($id) {
        $puesto = Puesto::where('id', $id)->first();
        $categorias = Categoria::all();
        return view('detail', compact('puesto', 'categorias'));
    }
}
