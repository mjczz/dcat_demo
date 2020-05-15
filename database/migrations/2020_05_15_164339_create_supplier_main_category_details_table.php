<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierMainCategoryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_main_category_detail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("cate_id")->default(0)->comment("主营类目id");
            $table->tinyInteger('cate_type')->default('1')->comment('类型 1图片材料 2文件材料');
            $table->string('name', 50)->default('')->comment('图片名称或者文件名');
            $table->string('desc', 100)->default('')->comment('图片默认提示文案');
            $table->tinyInteger('is_required')->default('2')->comment('是否未必填 1是 2否');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_main_category` COMMENT '供货商-主营类目模板对应的详情'";
        \Illuminate\Support\Facades\DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_main_category_detail');
    }
}
