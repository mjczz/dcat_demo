<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_brand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->comment("供货商id");
            $table->string('brand_name', 50)->default('')->comment('品牌名');
            $table->tinyInteger("brand_is_zhuan")->default(2)->comment("品牌是否是其他公司转让：1是 2否");
            $table->string('trademark_registration', 500)->default('')->comment('商标注册证明');
            $table->string('trademark_zhuan', 500)->default('')->comment('商标转让证明');
            $table->string('production_license', 500)->default('')->comment('生产许可证');
            $table->string('business_license', 500)->default('')->comment('营业执照');
            $table->string('authorization_letter', 500)->default('')->comment('授权书');
            $table->string('processing_agreement', 500)->default('')->comment('代加工协议');
            $table->tinyInteger("shenhe_status")->default(1)->comment("审核状态：1待审核 2审核通过 3审核拒绝");
            // 2个更新方式：1入驻时的提审时间 2入驻后自己添加品牌时的提交审核时间,提交审核后，要更新t_brand
            $table->integer('submit_shenhe_time')->default(0)->comment("提交审核时间");
            $table->integer('success_shenhe_time')->default(0)->comment("审核通过时间");
            $table->string("refuse_reason")->default('')->comment("审核拒绝理由");
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_brand` COMMENT '供货商-品牌'";
        \Illuminate\Support\Facades\DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_brand');
    }
}
