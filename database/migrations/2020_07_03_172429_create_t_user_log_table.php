<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_log', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->boolean('state')->nullable()->comment('登录 1  退出2,3注册');
            $table->unsignedBigInteger('ctime')->nullable()->comment('时间');
            $table->string('params', 200)->nullable()->default('')->comment('参数');
            $table->string('ip', 15)->nullable()->comment('ip地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_log');
    }
}
