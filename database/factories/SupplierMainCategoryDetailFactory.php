<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SupplierMainCategory;
use App\SupplierMainCategoryDetail;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

$factory->define(SupplierMainCategoryDetail::class, function (Faker $faker) {
    return [
        'cate_id' => SupplierMainCategory::all()->random(1)->toArray()[0]['id'],
        'cate_type' => rand(1,2),
        'name' => $faker->name,
        'desc' => "默认提示文案",
        'is_required' => rand(1,2),
        'ctime' => time(),
    ];
});
