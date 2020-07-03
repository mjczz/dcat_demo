<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBackstageNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_backstage_notice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200)->nullable()->comment('公告标题');
            $table->longText('content')->nullable()->comment('公告内容');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('修改时间');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->comment('文章排序  从小到大');
            $table->unsignedSmallInteger('is_pub')->nullable()->comment('1 发布  2 不发布');
            $table->unsignedBigInteger('isdel')->nullable()->comment('软删除位置  有时间代表删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_backstage_notice');
    }
}
