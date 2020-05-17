<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supplier;
use App\SupplierMainCategory;
use App\SupplierRelMainCategory;
use Faker\Generator as Faker;

$factory->define(SupplierRelMainCategory::class, function (Faker $faker) {
    $supplier_id = Supplier::all()->random(1)->toArray()[0]['id'];

    return [
        'supplier_id' => $supplier_id,
        'cate_id' => SupplierMainCategory::all()->random(1)->toArray()[0]['id'],
        'ctime' => time(),
        'submit_shenhe_time' => time(),
        'cuid' => $supplier_id,
    ];
});
