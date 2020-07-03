<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTemplateMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_template_message', function (Blueprint $table) {
            $table->increments('id')->comment('消息ID');
            $table->string('type', 32)->nullable()->comment('消息类型');
            $table->string('code', 32)->nullable()->comment('单号');
            $table->string('form_id', 64)->nullable()->comment('要发生给的用户');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('发送状态 1=未发送 2=已发送');
            $table->unsignedBigInteger('isdel')->nullable()->comment('删除标识');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_template_message');
    }
}
