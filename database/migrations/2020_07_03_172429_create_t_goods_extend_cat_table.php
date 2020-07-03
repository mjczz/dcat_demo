<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsExtendCatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_extend_cat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('goods_id')->nullable()->comment('商品id');
            $table->unsignedInteger('goods_cat_id')->nullable()->comment('商品分类id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_extend_cat');
    }
}
