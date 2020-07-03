<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAdvertisementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_advertisement', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('position_id')->nullable()->default(0)->comment('广告位置id');
            $table->string('name', 50)->nullable()->comment('广告名称');
            $table->char('img', 32)->nullable()->comment('广告图片id');
            $table->string('val')->nullable()->comment('链接属性值');
            $table->unsignedSmallInteger('sort')->nullable()->default(0)->comment('从小到大 越小越靠前');
            $table->unsignedBigInteger('ctime')->nullable()->comment('添加时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->string('code', 32)->nullable()->comment('广告位置编码');
            $table->unsignedTinyInteger('type')->nullable()->comment('类型  1url  2商品  3文章');
            $table->string('back_img')->default('')->comment('背景图片');
            $table->string('back_color', 20)->default('')->comment('背景颜色');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_advertisement');
    }
}
