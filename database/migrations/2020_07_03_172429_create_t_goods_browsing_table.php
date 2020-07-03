<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsBrowsingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_browsing', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->unsignedInteger('goods_id')->nullable()->comment('商品id 关联goods.id');
            $table->unsignedInteger('user_id')->index('user_id')->comment('用户id');
            $table->string('goods_name', 200)->comment('商品名称');
            $table->bigInteger('ctime')->comment('浏览时间');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel')->comment('删除标志');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_browsing');
    }
}
