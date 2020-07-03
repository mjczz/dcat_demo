<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserTokenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_token', function (Blueprint $table) {
            $table->char('token', 32)->primary();
            $table->unsignedInteger('user_id');
            $table->smallInteger('platform')->default(1)->comment('平台类型，1就是默认，2就是微信小程序');
            $table->unsignedBigInteger('ctime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_token');
    }
}
