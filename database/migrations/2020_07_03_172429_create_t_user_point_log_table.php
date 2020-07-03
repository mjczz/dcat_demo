<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserPointLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_point_log', function (Blueprint $table) {
            $table->increments('id')->comment('ID');
            $table->unsignedInteger('user_id')->comment('用户ID');
            $table->boolean('type')->unsigned()->nullable()->default(1)->comment('类型 1=签到 2=购物返积分 3=购物使用积分');
            $table->integer('num')->nullable()->default(0)->comment('积分数量');
            $table->unsignedBigInteger('balance')->nullable()->comment('积分余额');
            $table->string('remarks')->nullable()->comment('备注');
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
        Schema::dropIfExists('t_user_point_log');
    }
}
