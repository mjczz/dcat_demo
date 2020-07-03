<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAdvertPositionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_advert_position', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 120)->nullable()->comment('幻灯片名称');
            $table->string('code', 32)->nullable()->comment('广告位置编码');
            $table->unsignedBigInteger('ctime')->nullable()->comment('添加时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->boolean('state')->unsigned()->nullable()->default(1)->comment('1 启用  2禁用');
            $table->unsignedTinyInteger('sort')->nullable()->default(0)->comment('排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_advert_position');
    }
}
