<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTrialApplyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_trial_apply', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->integer('trial_id')->comment('关联试用产品表');
            $table->string('openid', 50)->nullable()->comment('微信open id');
            $table->string('name', 55)->nullable()->comment('用户姓名');
            $table->string('tel', 11)->nullable()->comment('手机号');
            $table->string('wechat', 55)->nullable()->comment('微信号');
            $table->string('address')->nullable()->comment('收货地址');
            $table->string('reason')->nullable()->comment('申请理由');
            $table->tinyInteger('status')->nullable()->default(1)->comment('审核状态：0失败，1审核中，2完成');
            $table->unsignedInteger('start_time')->nullable()->comment('申请时间');
            $table->unsignedInteger('apply_time')->nullable()->comment('审核时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_trial_apply');
    }
}
