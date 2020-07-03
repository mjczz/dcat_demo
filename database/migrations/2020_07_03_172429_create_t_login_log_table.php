<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLoginLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_login_log', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->boolean('state')->nullable()->comment('登录 1  退出2,3注册');
            $table->unsignedBigInteger('log_time')->nullable()->comment('时间');
            $table->string('city', 100)->nullable()->comment('地点城市');
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
        Schema::dropIfExists('t_login_log');
    }
}
