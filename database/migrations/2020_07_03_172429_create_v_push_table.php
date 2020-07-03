<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVPushTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_push', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->nullable()->comment('用户id');
            $table->string('cid', 100)->nullable()->comment('机器id');
            $table->dateTime('update')->nullable();
            $table->string('isdel', 30)->nullable()->comment('是否删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_push');
    }
}
