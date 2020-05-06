<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Puesto;
use App\Imagen;
use App\Subcategoria;
use App\Puestosubcategoria;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $puesto_id = Puesto::where('user_id', auth()->user()->id)->first();         // id del puesto
        $productos = ($puesto_id != null)? Producto::where('puesto_id', $puesto_id->id)->paginate(10): [];    // filtrar por puesto_id

        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puesto = Puesto::where('user_id', auth()->user()->id)->first();  // puesto
        $subcategorias = Subcategoria::where('categoria_id', $puesto->categoria_id)->get();

        return view('productos/create', compact('puesto', 'subcategorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name_prod'     =>  'required|min:3',
            'precio_prod'   =>  'required|regex:/^\d+(\.\d{1,2})?$/',
            'stock_prod'    =>  'required|alpha_num',
            'puesto_id'     =>  'required' 
        ];
        $this->validate($request, $rules);
        $producto = Producto::create(
            $request->only('name_prod', 'precio_prod', 'stock_prod', 'desc_prod', 'puesto_id')
        );

        $subcategorias = $request->input('subcategoria_id');
        foreach($subcategorias as $subcategoria) {
            Puestosubcategoria::create([
                'subcategoria_id' => $subcategoria,
                'puesto_id' => 1
            ]);
        }

        $notification = 'El producto se creo '.$producto->name.' correctamente con id: '.$producto->id;
        return redirect('productos/create')->with(compact('notification'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dropzoneFrom(Request $request)
    {
        $files = $request->file('file');
        $puesto = $request->input('puesto');
        $producto = $request->input('producto');
        foreach($files as $file){
            $name = $file->getClientOriginalName();
            $fileName = 'public/'.$puesto.'/'.$producto.'/'.$name;
            //indicamos que queremos guardar un nuevo archivo en el disco local
            \Storage::disk('local')->put($fileName,  \File::get($file));

            $imagen = Imagen::create(
                [
                    'url_imagen'    => $name,
                    'producto_id'   => $producto 
                ]
            );
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function dropzonedelete(Request $request)
    {
        $name = $request->input('name');
        $producto_id = $request->input('producto');
        $puesto_id = $request->input('puesto');

        $imagen = Imagen::where('producto_id', $producto_id)->where('url_imagen', $name)->delete();

        $fileName = 'public/'.$puesto_id.'/'.$producto_id.'/'.$name;
        \Storage::delete($fileName);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
