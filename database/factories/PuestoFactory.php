<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Puesto;
use App\Model;
use Faker\Generator as Faker;

$factory->define(Puesto::class, function (Faker $faker) {
    return [
        'code'          => $faker->unique()->swiftBicNumber,
        'description'   => $faker->text($maxNbChars = 200),
        'calification'  => $faker->randomElement([1,2,3,4,5]),
        'phone'         => $faker->e164PhoneNumber,
        'user_id'       => $faker->numberBetween($min = 1, $max = 10),
    ];
});