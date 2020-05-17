<?php

use App\Services\SupplierService;
use App\Supplier;
use App\SupplierBaseInfo;
use App\SupplierEnterpriseInfo;
use App\SupplierMainCategory;
use App\SupplierMainCategoryDetail;
use App\SupplierRelMainCategory;
use App\SupplierRelMainCategoryDetail;
use Dcat\Admin\Models\Administrator;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 供货商
        //\factory(Supplier::class, 20)->create();

        // 供货商基本信息
        //\factory(SupplierBaseInfo::class, 20)->create();

        // 供货商企业信息
        //\factory(SupplierEnterpriseInfo::class, 20)->create();

        // 主营类目
        //\factory(SupplierMainCategory::class, 20)->create();

        // 主营类目详情
        //\factory(SupplierMainCategoryDetail::class, 20)->create();

        // 供货商的主营类目
        //\factory(SupplierRelMainCategory::class, 20)->create();

        // 供货商的主营类目对应的详情
        $faker = \Faker\Factory::create();
        $rel_ids = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        foreach ($rel_ids as $rel_id) {
            $relMainCategory = SupplierRelMainCategory::find($rel_id);
            $details = SupplierMainCategoryDetail::where("cate_id", $relMainCategory->cate_id)->get();
            $data = [];
            if (empty($details)) throw new \Exception($relMainCategory->name."下不存在详情");

            foreach ($details as $detail) {
                $data[] =[
                    'rel_cate_id' => $relMainCategory->id,
                    'detail_id' => $detail->id,
                    'detail_url' => $faker->url
                ];
            }
            SupplierRelMainCategoryDetail::where("rel_main_cate_id", $relMainCategory->id)->delete();
            SupplierRelMainCategoryDetail::insert($data);
        }














        //$faker = \Faker\Factory::create();

        //$users = [];
        //foreach (range(0, 20) as $v) {
        //    $users[] = [
        //        'username'   => $faker->userName,
        //        'password'   => bcrypt('admin'),
        //        'name'       => $faker->name,
        //        'created_at' => date('Y-m-d H:i:s'),
        //    ];
        //}
        //
        //Administrator::insert($users);
    }
}
