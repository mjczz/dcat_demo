<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_brand', function (Blueprint $table) {
            $table->increments('id')->comment('品牌ID');
            $table->string('name', 50)->nullable()->comment('品牌名称');
            $table->char('logo')->nullable()->comment('品牌LOGO 图片ID');
            $table->unsignedSmallInteger('sort')->nullable()->default(0)->index('sort')->comment('品牌排序 越小越靠前');
            $table->boolean('selected')->nullable()->default(0)->comment('0 不是 1是');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel')->comment('删除标志 有数据代表删除');
            $table->integer('goods_cat_id')->default(0)->comment('分类一级id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_brand');
    }
}
