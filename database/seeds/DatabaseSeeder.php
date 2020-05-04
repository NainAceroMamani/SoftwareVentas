<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Producto;
use App\Puesto;
use App\Categoria;
use App\Subcategoria;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Nain Acero Mamani',
            'email' => 'nain.acero24@gmail.com',
            'password' => bcrypt('secret'),
            'address' => '',
            'dni' => '74575544',
            'role' => 'Cliente'
        ]);

        User::create([
            'name' => 'Nain Acero Mamani',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('secret'),
            'dni' => '74575544',
            'address' => '',
            'role' => 'Admin'
        ]);

        Categoria::create([
            'name'      =>  'Restaurantes',
            'url_imagen'=>  'restaurantes.jpg'
        ]);

        Categoria::create([
            'name'      =>  'Artefactos',
            'url_imagen'=>  'artefactos.jpg'
        ]);

        Categoria::create([
            'name'      =>  'Comida',
            'url_imagen'=>  'comida.png'
        ]);

        Categoria::create([
            'name'      =>  'Muebles',
            'url_imagen'=>  'muebles.jpg'
        ]);
        
        Subcategoria::create([
            'name'          => 'Niños',
            'categoria_id'  => '1'
        ]);

        Subcategoria::create([
            'name'          => 'Damas',
            'categoria_id'  => '1'
        ]);

        factory(User::class, 500)->create();
        factory(Puesto::class, 500)->create();
        factory(Producto::class, 5000)->create();
    }
}
