<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSupplierMainCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_main_category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('')->comment('类目名称');
            $table->tinyInteger('cate_status')->default('1')->comment('是否启用招商 1启用 2禁用');
            $table->integer('onsale_goods_num')->default('0')->comment('在架商品数');
            $table->string('pic_material', 500)->default('')->comment('图片材料格式');
            $table->string('file_material', 500)->default('')->comment('文件材料格式');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_main_category` COMMENT '供货商-主营类目模板表'";
        \Illuminate\Support\Facades\DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_main_category');
    }
}
