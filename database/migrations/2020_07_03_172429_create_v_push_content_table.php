<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVPushContentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_push_content', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 300)->nullable()->comment('uniapp推送头部');
            $table->string('payload', 800)->nullable()->comment('参数');
            $table->string('content', 600)->nullable()->comment('uniapp推送内容');
            $table->string('type', 60)->nullable()->index('idstype')->comment('推送的类型');
            $table->dateTime('updatetime')->nullable()->comment('更新时间');
            $table->string('activename')->nullable()->comment('活动名称');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_push_content');
    }
}
