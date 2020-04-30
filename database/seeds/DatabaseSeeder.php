<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Producto;
use App\Puesto;

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

        factory(User::class, 500)->create();
        factory(Puesto::class, 500)->create();
        factory(Producto::class, 5000)->create();
    }
}
