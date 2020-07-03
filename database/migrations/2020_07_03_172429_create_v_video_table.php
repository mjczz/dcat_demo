<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_video', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->string('src', 600)->comment('视频URL');
            $table->string('poster', 600)->comment('视频封面图');
            $table->integer('duration')->comment('视频时长 秒');
            $table->string('title', 100)->comment('视频标题');
            $table->integer('sort')->comment('视频排序');
            $table->string('type', 80)->nullable()->default('video')->comment(' 类型 video 视频 url 链接 ');
            $table->tinyInteger('cate_id')->nullable()->default(1)->comment('分类id 1新手...');
            $table->string('cate_name')->nullable()->comment('所属分类名称');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_video');
    }
}
