<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFormTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_form', function (Blueprint $table) {
            $table->bigInteger('id', true);
            $table->string('name', 100)->nullable()->comment('表单名称');
            $table->boolean('type')->unsigned()->default(2)->comment('1订单、2留言、3反馈、4登记、5调研');
            $table->unsignedInteger('sort')->nullable()->default(100)->comment('表单排序');
            $table->string('desc')->nullable()->comment('表单描述');
            $table->boolean('head_type')->unsigned()->nullable()->default(1)->comment('1图片2轮播3视频');
            $table->string('head_type_value', 200)->nullable()->comment('表单头值');
            $table->string('head_type_video', 32)->nullable();
            $table->string('button_name', 50)->nullable()->comment('表单提交按钮名称');
            $table->string('button_color', 30)->nullable()->comment('表单按钮颜色');
            $table->boolean('is_login')->unsigned()->nullable()->default(2)->comment('是否需要登录1需要2不需要');
            $table->unsignedInteger('times')->nullable()->default(0)->comment('可提交次数');
            $table->string('qrcode', 200)->nullable()->comment('二维码图片地址');
            $table->string('return_msg', 200)->nullable()->default('')->comment('提交后提示语');
            $table->unsignedBigInteger('end_date')->nullable()->comment('到期时间');
            $table->unsignedBigInteger('ctime')->nullable()->default(0)->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_form');
    }
}
