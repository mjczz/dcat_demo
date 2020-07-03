<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPromotionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_promotion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40)->comment('促销名称');
            $table->boolean('status')->unsigned()->default(1)->index('status')->comment('启用状态，1开启，2关闭');
            $table->unsignedSmallInteger('type')->default(1)->comment('类型：1促销，2优惠券，3团购，4秒杀');
            $table->unsignedSmallInteger('sort')->default(100)->index('sort')->comment('排序');
            $table->boolean('exclusive')->unsigned()->default(1)->comment('排他，1不排他，2排他');
            $table->unsignedSmallInteger('auto_receive')->default(1)->comment('当时优惠券的时候，自动是否自动领取，1自动领取，2不自动领取');
            $table->text('params')->nullable()->comment('其它参数');
            $table->unsignedBigInteger('stime')->comment('开始时间');
            $table->unsignedBigInteger('etime')->comment('结束时间');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_promotion');
    }
}
