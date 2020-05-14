<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\SupplierCategory;
use Faker\Generator as Faker;

$factory->define(SupplierCategory::class, function (Faker $faker) {
    $pic_material = [
        [
            'name' => "名称",
            "desc" => "默认提示文案",
            'required' => 1, // 是否必填 1是 2否
        ],
        [
            'name' => "名称2",
            "desc" => "默认提示文案2",
            'required' => 1, // 是否必填 1是 2否
        ]
    ];

    $file_material = [
        [
            'name' => "文件名",
            'required' => 1, // 是否必填 1是 2否
        ],
        [
            'name' => "名称2",
            'required' => 1, // 是否必填 1是 2否
        ]
    ];

    $time = time();

    return [
        'name' => "品类名称--".$faker->name,
        'cate_status' => 1,
        'pic_material' => json_encode($pic_material),
        'file_material' => json_encode($file_material),
        'ctime' => $time,
        'utime' => $time,
    ];
});
