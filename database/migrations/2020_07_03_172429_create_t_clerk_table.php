<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTClerkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_clerk', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('store_id')->nullable()->comment('店铺ID');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID');
            $table->unsignedBigInteger('ctime')->nullable()->comment('关联时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('isdel')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_clerk');
    }
}
