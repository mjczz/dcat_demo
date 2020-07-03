<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOrderLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_order_log', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->string('order_id', 20)->nullable()->comment('订单ID');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID');
            $table->unsignedTinyInteger('type')->nullable()->default(1)->comment('类型');
            $table->string('msg', 100)->nullable()->comment('描述介绍');
            $table->string('data', 1000)->nullable()->comment('请求的数据json');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_order_log');
    }
}
