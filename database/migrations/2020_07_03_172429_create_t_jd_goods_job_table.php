<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTJdGoodsJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_jd_goods_job', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100)->nullable()->comment('商品池名字');
            $table->unsignedInteger('page_num')->nullable()->default(0)->comment('商品池编码');
            $table->string('sku_id', 20)->nullable()->comment('商品sku');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('1未开始 2成功，3京东错误，4要重试');
            $table->unsignedBigInteger('time')->nullable()->comment('更新时间');
            $table->unsignedTinyInteger('times')->nullable()->default(0)->comment('重试次数');
            $table->text('desc')->nullable()->comment('备注');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_jd_goods_job');
    }
}
