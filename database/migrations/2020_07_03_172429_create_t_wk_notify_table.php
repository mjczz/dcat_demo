<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWkNotifyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_wk_notify', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('status')->default(1)->comment('1未处理 2处理成功 3处理失败');
            $table->string('action', 100)->default('')->comment('通知类型');
            $table->string('flow_id', 200)->default('')->comment('合同流程id');
            $table->string('account_id', 200)->default('')->comment('个人账户id');
            $table->tinyInteger('sign_result')->comment('签署人签署状态 2:签署完成 3:失败 4:拒签');
            $table->tinyInteger('flow_status')->default(0)->comment('任务状态 2-已完成: 所有签署人完成签署；3-已撤销: 发起方撤销签署任务；5-已过期: 签署截止日到期后触发；7-已拒签');
            $table->text('body')->nullable()->comment('e签宝回调信息');
            $table->string('sign_time', 30)->default('')->comment('签约时间');
            $table->text('status_error_msg')->nullable()->comment('处理失败报错信息');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_wk_notify');
    }
}
