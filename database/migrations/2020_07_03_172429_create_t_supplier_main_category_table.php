<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('supplier_id')->default(0)->comment('供货商id');
            $table->integer('goods_cate_id')->default(0)->comment('goods_cat id');
            $table->tinyInteger('cate_status')->default(1)->comment('是否启用招商 1启用 2禁用');
            $table->tinyInteger('shenhe_status')->default(1)->comment('审核状态：1审核中 2审核通过 3审核拒绝');
            $table->integer('submit_shenhe_time')->default(0)->comment('提交审核时间');
            $table->integer('success_shenhe_time')->default(0)->comment('审核通过时间');
            $table->string('refuse_reason')->default('')->comment('审核拒绝理由');
            $table->integer('onsale_goods_num')->default(0)->comment('在架商品数');
            $table->string('shenhe_material', 2000)->default('')->comment('审核材料');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer('delete_time')->nullable();
        });
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
