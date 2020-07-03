<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWkTables extends Migration
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
            $table->tinyInteger('status')->default(1)->comment('1未处理 2处理成功 3处理失败');
            $table->string("action", 100)->default('')->comment("通知类型");
            $table->string("flow_id", 200)->default('')->comment("合同流程id");
            $table->string("account_id", 200)->default('')->comment("个人账户id");
            $table->tinyInteger('flow_status')->default(0)->comment('任务状态 2-已完成: 所有签署人完成签署；3-已撤销: 发起方撤销签署任务；5-已过期: 签署截止日到期后触发；7-已拒签');
            $table->text('body')->comment('e签宝回调信息');
        });
        $sql = "ALTER TABLE `t_wk_notify` COMMENT 'e签宝签署流程回调信息'";
        \Illuminate\Support\Facades\DB::statement($sql);
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
