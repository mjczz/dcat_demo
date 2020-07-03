<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserActiveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_active', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->string('method', 200)->nullable()->comment('操作方法');
            $table->string('params', 200)->nullable()->default('')->comment('可能的参数');
            $table->date('ctime')->nullable()->comment('插入时间年月日');
            $table->unsignedInteger('utime')->nullable()->comment('更新时间');
            $table->unique(['user_id', 'ctime'], 'uid_ctime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_active');
    }
}
