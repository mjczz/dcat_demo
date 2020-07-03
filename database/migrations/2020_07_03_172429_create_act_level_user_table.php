<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActLevelUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('act_level_user', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->unsignedInteger('user_id')->comment('用户ID');
            $table->unsignedInteger('level_id')->comment('活动级别ID');
            $table->unsignedInteger('activity_id')->default(0)->comment('活动ID');
            $table->unsignedTinyInteger('status')->default(0)->comment('0=正常参与,1=完成, 2=已发放奖励');
            $table->unsignedBigInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedBigInteger('update_time')->default(0)->comment('更新时间');
            $table->unique(['user_id', 'activity_id'], 'UK_USER_ID_ACTIVITY_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('act_level_user');
    }
}
