<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTHotSouTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_hot_sou', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40)->comment('热搜名称');
            $table->integer('goods_id')->default(0)->comment('商品id');
            $table->boolean('status')->unsigned()->default(1)->comment('启用状态，1开启，2关闭');
            $table->unsignedSmallInteger('sort')->default(100)->comment('排序');
            $table->unsignedBigInteger('ctime')->comment('创建时间');
            $table->unsignedBigInteger('utime')->comment('更新时间');
            $table->unsignedBigInteger('delete_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_hot_sou');
    }
}
