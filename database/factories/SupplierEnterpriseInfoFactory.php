<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use App\SupplierEnterpriseInfo;
use Faker\Generator as Faker;

$factory->define(SupplierEnterpriseInfo::class, function (Faker $faker) {
    return [
        'supplier_id' => Supplier::all()->random(1)->toArray()[0]['id'],
        'production_license' => $faker->url,
        'license_for_operation' => $faker->url,
        'business_license' => $faker->url,
        'processing_agreement' => $faker->url,
        'authorization_letter' => $faker->url,
        'trademark_registration' => $faker->url,
        'ctime' => time(),
        'cuid' => Supplier::all()->random(1)->toArray()[0]['id'],
    ];
});
