<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_images', function (Blueprint $table) {
            $table->unsignedInteger('goods_id')->index('goods_id')->comment('商品ID');
            $table->char('image_id', 32)->comment('图片ID');
            $table->integer('sort')->nullable()->default(100)->comment('图片排序');
            $table->tinyInteger('type')->nullable()->comment('1表示京东');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_images');
    }
}
