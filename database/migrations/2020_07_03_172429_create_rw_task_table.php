<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rw_task', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40)->comment('任务名称');
            $table->string('area_id', 40)->nullable()->default('0')->comment('地区id');
            $table->boolean('status')->unsigned()->default(1)->index('status')->comment('启用状态，1开启，2关闭');
            $table->unsignedSmallInteger('sort')->default(100)->index('sort')->comment('排序');
            $table->text('params')->nullable()->comment('其它参数');
            $table->unsignedBigInteger('stime')->comment('开始时间');
            $table->unsignedBigInteger('etime')->comment('结束时间');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rw_task');
    }
}
