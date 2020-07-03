<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsCatSpuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_cat_spu', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('goods_cat_id')->default(0)->index('goods_cat_id')->comment('商品分类id');
            $table->integer('spec_id')->nullable()->comment('商品类型属性id');
            $table->string('json_value', 500)->nullable()->comment('商品类型属性值的id的json集合');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('1=显示 2=不显示');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_cat_spu');
    }
}
