<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOrderFuliReturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_order_fuli_return', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->string('order_id', 32)->index('order_id')->comment('订单ID');
            $table->unsignedInteger('goods_id')->comment('商品ID');
            $table->decimal('amount', 10)->unsigned()->comment('返佣金额（元）');
            $table->unsignedInteger('user_id')->index('user_id')->comment('用户ID');
            $table->tinyInteger('status')->default(0)->comment('0未返 1已返');
            $table->timestamp('create_time')->useCurrent()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_order_fuli_return');
    }
}
