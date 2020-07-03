<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_activity', function (Blueprint $table) {
            $table->increments('activity_id')->comment('自增ID');
            $table->string('activity_name')->comment('活动名');
            $table->unsignedTinyInteger('group_id')->default(0)->comment('分组ID');
            $table->unsignedBigInteger('start_time')->comment('开始时间');
            $table->unsignedBigInteger('end_time')->comment('结束时间');
            $table->string('intro')->nullable()->comment('活动介绍');
            $table->text('description')->nullable()->comment('活动描述');
            $table->string('icon_img')->nullable()->comment('活动图标');
            $table->string('banner_img')->nullable()->comment('活动BANNER');
            $table->unsignedTinyInteger('status')->default(0)->comment('状态0=禁用,1=启用');
            $table->unsignedTinyInteger('is_ex')->default(0)->comment('是否单选活动级别 0=是,1=否');
            $table->bigInteger('create_time')->comment('创建时间');
            $table->bigInteger('update_time')->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('act_activity');
    }
}
