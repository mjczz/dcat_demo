<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSupplierRelMainCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_rel_main_category', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->default(0)->comment("供货商id");
            $table->integer("main_category_id")->default(0)->comment("主营类目id");
            $table->string('pic_material', 500)->default('')->comment('图片材料格式');
            $table->string('file_material', 500)->default('')->comment('文件材料格式');
            $table->tinyInteger("shenhe_status")->default(1)->comment("审核状态：1待审核 2审核通过 3审核拒绝");
            // 2个更新方式：1入驻时的提审时间 2入驻后自己添加主营类目时的提交审核时间
            $table->integer('submit_shenhe_time')->default(0)->comment("提交审核时间");
            $table->integer('success_shenhe_time')->default(0)->comment("审核通过时间");
            $table->string("refuse_reason")->default('')->comment("审核拒绝理由");
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_rel_main_category` COMMENT '供货商-对应的主营类目'";
        \Illuminate\Support\Facades\DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_rel_main_category');
    }
}
