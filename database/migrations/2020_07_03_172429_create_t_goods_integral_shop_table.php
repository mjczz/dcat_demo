<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsIntegralShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_integral_shop', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->unsignedInteger('goods_id')->unique('UK_GOODS_ID')->comment('商品ID');
            $table->unsignedInteger('integral_mun')->default(0)->comment('积分(分)');
            $table->unsignedInteger('money')->default(0)->comment('金额(分)');
            $table->unsignedBigInteger('start_time')->default(0)->comment('开始时间');
            $table->unsignedBigInteger('end_time')->default(0)->comment('结束时间');
            $table->timestamp('create_time')->useCurrent()->comment('添加时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_integral_shop');
    }
}
