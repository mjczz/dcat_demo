<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActActivityLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_activity_level', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->unsignedInteger('activity_id')->comment('活动ID');
            $table->unsignedTinyInteger('level_number')->default(0)->comment('自定义级别');
            $table->string('level_name')->comment('自定义级别名');
            $table->string('level_intro')->comment('级别介绍');
            $table->string('icon_img')->nullable()->comment('级别图标');
            $table->string('banner_img')->nullable()->comment('级别BANNER');
            $table->integer('complete_limit')->default(0)->comment('最大完成人数');
            $table->integer('completed')->default(0)->comment('已完成人数');
            $table->integer('condition_min_value')->nullable()->comment('完成条件最小值');
            $table->integer('condition_max_value')->nullable()->comment('完成条件最大值');
            $table->bigInteger('create_time')->comment('创建时间');
            $table->bigInteger('update_time')->default(0)->comment('更新时间');
            $table->unique(['activity_id', 'level_number'], 'UK_ACTIVITY_ID_ACTIVITY_NUMBER');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('act_activity_level');
    }
}
