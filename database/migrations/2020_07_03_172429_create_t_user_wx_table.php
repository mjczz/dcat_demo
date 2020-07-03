<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserWxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_wx', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->unsignedInteger('pid')->default(0)->comment('上级ID');
            $table->boolean('type')->unsigned()->nullable()->default(1)->comment('第三方登录类型，1微信小程序，2微信公众号');
            $table->unsignedTinyInteger('grade_id')->default(1)->comment('用户级别1普通会员 2服务商 3体验商家 4实力商家');
            $table->unsignedInteger('user_id')->default(0)->comment('关联用户表');
            $table->string('openid', 50)->nullable();
            $table->string('session_key', 50)->nullable();
            $table->string('unionid', 50)->nullable();
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('nickname', 50)->nullable()->comment('昵称');
            $table->decimal('balance', 10)->unsigned()->default(0.00)->comment('余额');
            $table->unsignedInteger('point')->default(0)->comment('积分');
            $table->unsignedSmallInteger('gender')->default(0)->comment('性别 0：未知、1：男、2：女');
            $table->string('language', 50)->nullable()->comment('语言');
            $table->string('city', 80)->nullable()->comment('城市');
            $table->string('province', 80)->nullable()->comment('省');
            $table->string('country', 80)->nullable()->comment('国家');
            $table->string('country_code', 20)->nullable()->comment('手机号码国家编码');
            $table->string('mobile', 20)->nullable()->comment('手机号码');
            $table->unsignedBigInteger('ctime')->nullable();
            $table->unsignedBigInteger('utime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_wx');
    }
}
