<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_template', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 200)->nullable()->comment('模板名称');
            $table->unsignedInteger('th_template_id')->nullable()->comment('模板ID，第三方平台id');
            $table->unsignedInteger('create_time')->nullable()->default(0)->comment('创建时间');
            $table->string('user_desc', 200)->nullable()->comment('模板描述');
            $table->string('source_appid', 100)->nullable()->comment('模板APPID');
            $table->string('developer', 100)->nullable()->comment('模板开发者');
            $table->string('version', 100)->nullable()->comment('模板版本，总共3位，第一位表示重大版本升级，第二位表示小版本升级，第三位表示补丁或更新');
            $table->char('image_id', 32)->nullable()->comment('模板主图');
            $table->text('desc')->nullable()->comment('模板需要注意事项');
            $table->char('qr_demo', 32)->nullable()->comment('二维码预览图片');
            $table->boolean('type')->unsigned()->nullable()->default(1)->comment('模板类型，1为小程序');
            $table->text('ext_json')->nullable()->comment('模板增加模板配置字段');
            $table->integer('ctime')->nullable()->comment('数据创建时间');
            $table->integer('utime')->nullable()->comment('数据更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_template');
    }
}
