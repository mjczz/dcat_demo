<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTNoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_notice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200)->nullable()->comment('公告标题');
            $table->longText('content')->nullable()->comment('公告内容');
            $table->boolean('type')->unsigned()->nullable()->default(1)->comment('公告类型');
            $table->bigInteger('ctime')->nullable()->comment('创建时间 毫秒');
            $table->unsignedTinyInteger('sort')->nullable()->default(100)->index('sort')->comment('排序 从小到大');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel')->comment('软删除位  有时间代表已删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_notice');
    }
}
