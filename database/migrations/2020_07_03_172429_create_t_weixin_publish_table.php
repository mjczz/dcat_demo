<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWeixinPublishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_weixin_publish', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('template_id')->nullable()->default(0)->comment('模板id，不是第三方平台模板id');
            $table->unsignedInteger('ctime')->nullable()->default(0)->comment('购买模板时间');
            $table->boolean('audit_status')->nullable()->comment('审核状态，其中0为审核成功，1为审核失败，2为审核中,-1为未提交审核');
            $table->text('reason')->nullable()->comment('审核反馈');
            $table->boolean('publish_status')->nullable()->default(0)->comment('发布状态，0未发布，1已发布，2发布成功，3发布失败');
            $table->text('publish_msg')->nullable()->comment('发布反馈');
            $table->string('auditid', 50)->nullable()->comment('审核id');
            $table->text('ext_json')->nullable()->comment('第三方自定义的json');
            $table->string('user_version', 50)->nullable()->default('')->comment('代码版本号');
            $table->string('user_desc', 200)->nullable()->comment('代码描述');
            $table->string('appid', 100)->nullable()->comment('授权appid');
            $table->string('qrcode')->nullable()->comment('预览二维码');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_weixin_publish');
    }
}
