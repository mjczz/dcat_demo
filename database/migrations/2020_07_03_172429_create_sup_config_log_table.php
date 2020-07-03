<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupConfigLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_config_log', function (Blueprint $table) {
            $table->increments('id')->comment('日志ID');
            $table->char('event_id', 128)->comment('行为ID');
            $table->unsignedInteger('config_id')->comment('配置ID');
            $table->char('sup_code', 14)->comment('供应商编码');
            $table->string('conf_name', 256)->comment('配置名');
            $table->char('conf_field', 128)->comment('配置字段');
            $table->string('conf_value', 2048)->comment('配置值');
            $table->char('save_type', 16)->default('string')->comment('保存类型 json,number,string');
            $table->unsignedInteger('manage_id')->default(0)->comment('管理员ID');
            $table->unsignedBigInteger('create_time')->default(0)->comment('创建时间');
            $table->index(['sup_code', 'conf_field'], 'company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_config_log');
    }
}
