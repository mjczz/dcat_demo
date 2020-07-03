<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActActivityLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_activity_log', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->char('event_id', 64)->comment('事件ID');
            $table->unsignedInteger('manage_id')->default(0)->comment('管理员ID');
            $table->unsignedInteger('user_id')->default(0)->index('user_id')->comment('用户ID');
            $table->unsignedInteger('activity_id')->comment('活动ID');
            $table->unsignedInteger('level_id')->comment('活动级别ID');
            $table->unsignedBigInteger('create_time')->index('create_time')->comment('创建时间');
            $table->index(['activity_id', 'level_id'], 'activity_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('act_activity_log');
    }
}
