<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPintuanRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pintuan_record', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('team_id')->nullable()->comment('团id');
            $table->unsignedInteger('user_id')->nullable()->comment('用户Id');
            $table->unsignedInteger('rule_id')->nullable()->comment('规则表Id');
            $table->unsignedBigInteger('goods_id')->comment('商品id');
            $table->boolean('status')->unsigned()->default(1)->comment('状态 1=拼团中2=成功 3=失败');
            $table->string('order_id', 20)->nullable()->comment('订单id');
            $table->string('params', 200)->comment('json格式的参数，主要是拼团人数');
            $table->unsignedBigInteger('close_time')->comment('关闭时间');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
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
        Schema::dropIfExists('t_pintuan_record');
    }
}
