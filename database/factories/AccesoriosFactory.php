<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Accesorios;
use Faker\Generator as Faker;

$factory->define(Accesorios::class, function (Faker $faker) {
    return [
        'nombre' => $faker->sentence(1),
        'marca' => $faker->sentence(2),
        'precio' =>  $faker->sentence(1),
        'tipo' =>  $faker->sentence(2),
        'imagen' =>  $faker->imageUrl(400,300),
        'talla' => $faker->sentence(1),
        'color' => $faker->sentence(2),
    ];
});
