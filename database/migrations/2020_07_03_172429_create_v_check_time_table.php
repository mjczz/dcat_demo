<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVCheckTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_check_time', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('uid')->index('uid_for_count')->comment('用户名');
            $table->string('json', 600)->nullable()->comment('用户提交信息');
            $table->date('checktime')->nullable()->index('check_time_uid')->comment('时间');
            $table->dateTime('datetime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_check_time');
    }
}
