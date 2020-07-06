<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(5),
        'sex' => $faker->sentence(2),
        'image' => $faker->imageUrl(400,300),
        //image =>$faker->image('public/img',400,300,null,false),
        'description' => $faker->paragraph(2),
        'race' => $faker->sentence(5),
        'type' => $faker->sentence(5),
    ];
});
