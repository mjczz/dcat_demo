<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_cart', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->index('user_id')->comment('用户ID 关联user.id');
            $table->unsignedInteger('product_id')->nullable()->comment('货品ID');
            $table->unsignedSmallInteger('nums')->nullable()->default(0)->comment('货品数量');
            $table->unsignedTinyInteger('type')->default(1)->comment('购物车类型,1普通类型，2拼团类型');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_cart');
    }
}
