<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'password' => bcrypt('123456'),
        'created_at' => now(),
        'email' => $faker->email,
    ];
});
