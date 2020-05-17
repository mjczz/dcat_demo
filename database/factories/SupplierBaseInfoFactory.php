<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use App\SupplierBaseInfo;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(SupplierBaseInfo::class, function (Faker $faker) {
    return [
        'supplier_id' => Supplier::all()->random(1)->toArray()[0]['id'],
        'enterprise_name' => $faker->title,
        'legal_person' => $faker->title,
        'duty_paragraph' => $faker->randomNumber(),
        'duijie_person' => $faker->name,
        'duijie_person_mobile' => $faker->phoneNumber,
        'duijie_person_email' => $faker->email,
        'recommend_person' => $faker->name,
        'recommend_person_mobile' => $faker->phoneNumber,
        'ctime' => time(),
        'cuid' => Supplier::all()->random(1)->toArray()[0]['id'],
    ];
});
