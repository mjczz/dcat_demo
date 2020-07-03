<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTShopGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_shop_goods', function (Blueprint $table) {
            $table->increments('id')->comment('自增店铺ID');
            $table->unsignedInteger('shop_id')->comment('店铺ID');
            $table->unsignedInteger('goods_id')->comment('商品id');
            $table->integer('sort')->nullable()->comment('排序，置顶');
            $table->boolean('marketable')->unsigned()->nullable()->default(1)->comment('上架标志 1=上架 2=下架');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_shop_goods');
    }
}
