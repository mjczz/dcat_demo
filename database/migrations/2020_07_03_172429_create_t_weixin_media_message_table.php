<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWeixinMediaMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_weixin_media_message', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('title', 200)->nullable()->comment('标题');
            $table->string('author', 100)->nullable()->comment('作者');
            $table->string('brief')->nullable()->comment('摘要');
            $table->char('image', 32)->nullable()->comment('封面');
            $table->text('content')->nullable()->comment('文章详情');
            $table->string('url')->nullable()->comment('原文地址');
            $table->bigInteger('ctime')->nullable()->default(0)->comment('创建时间');
            $table->bigInteger('utime')->nullable()->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_weixin_media_message');
    }
}
