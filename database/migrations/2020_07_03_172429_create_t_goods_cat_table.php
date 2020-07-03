<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_cat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->default(0)->index('seller_id')->comment('上级分类id');
            $table->string('name', 20)->nullable()->comment('分类名称');
            $table->unsignedInteger('type_id')->nullable()->default(0)->comment('类型ID 关联 goods_type.id');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->comment('分类排序 越小越靠前');
            $table->string('image_id', 300)->nullable()->comment('分类图片ID');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('1=显示 2=不显示');
            $table->boolean('selected')->nullable()->default(0)->comment('是否为精选  0不是 1是');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->boolean('cat_enable')->default(1)->comment('是否启用：1禁用 2启用');
            $table->integer('ctime')->default(0)->comment('添加时间');
            $table->string('shenhe_material_tmp', 1000)->default('')->comment('审核材料模板');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_cat');
    }
}
