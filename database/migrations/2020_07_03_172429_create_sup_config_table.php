<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_config', function (Blueprint $table) {
            $table->increments('config_id')->comment('自增ID');
            $table->char('sup_code', 14)->comment('供应商编码');
            $table->string('conf_name', 256)->comment('配置名');
            $table->char('conf_field', 128)->comment('配置字段');
            $table->string('conf_value', 2048)->comment('配置值');
            $table->char('save_type', 16)->default('string')->comment('保存类型 json,number,string');
            $table->unsignedBigInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedBigInteger('update_time')->default(0)->comment('更新时间');
            $table->unique(['sup_code', 'conf_field'], 'UK_COMPANY_ID_CONF_FIELD');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_config');
    }
}
