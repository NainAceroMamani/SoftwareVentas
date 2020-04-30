<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Producto;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Producto::class, function (Faker $faker) {
    return [
        'name_prod'     => $faker->streetName,
        'desc_prod'     => $faker->text($maxNbChars = 300),
        'precio_prod'   => $faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 2),
        'stock_prod'    => $faker->numberBetween($min = 1, $max = 900),
        'puesto_id'     => $faker->numberBetween($min = 1, $max = 450)
    ];
});
