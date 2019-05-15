<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'Make' => $faker->name,
        'Model' => $faker->unique()->safeEmail,
        'Year' => now(),
    ];
});
