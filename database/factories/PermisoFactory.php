<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Permiso;
use Faker\Generator as Faker;

$factory->define(Permiso::class, function (Faker $faker) {
    return [
        'nombre' => $faker->unique()->name,
        'slug' => $faker->unique()->word,
    ];
});
