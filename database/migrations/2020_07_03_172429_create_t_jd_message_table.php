<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJdMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jd_message', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->default(0)->comment('消息类型');
            $table->string('msg_id', 50)->default('0')->comment('推送id');
            $table->text('msg_body')->comment('消息体');
            $table->string('msg_time', 20)->default('')->comment('time');
            $table->integer('msg_time_int')->default(0)->comment('msg_time的时间戳格式');
            $table->tinyInteger('msg_status')->default(1)->comment('1未处理 2已处理 3暂不处理');
            $table->string('jd_order_id', 50)->default('0')->comment('京东订单id');
            $table->string('sku_id', 50)->default('0')->comment('京东sku_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_jd_message');
    }
}
