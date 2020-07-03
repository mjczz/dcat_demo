<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMessageCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_message_center', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 32)->nullable()->comment('编码');
            $table->boolean('sms')->unsigned()->comment('1 启用  2禁用');
            $table->boolean('message')->unsigned()->comment('站内消息');
            $table->boolean('wx_tpl_message')->unsigned()->comment('微信模板消息');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_message_center');
    }
}
