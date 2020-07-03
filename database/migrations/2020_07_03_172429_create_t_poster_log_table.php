<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPosterLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_poster_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->tinyInteger('source')->nullable()->default(0)->comment('来源 1=普通H5页面 2=微信小程序 3=微信公众号H5');
            $table->tinyInteger('type')->nullable()->default(0)->comment('分享类型 1=商品海报 2=邀请海报 3=拼团海报 4=店铺首页 11=自定义网页');
            $table->integer('user_id')->nullable()->default(0)->comment('用户ID');
            $table->tinyInteger('tid')->nullable()->default(0)->comment('类型值 1商品海报就是商品ID 2邀请海报无需填 3拼团海报的时候就是商品ID 4店铺code');
            $table->integer('team_id')->nullable()->default(0)->comment('拼团海报的时候是拼团的团队ID');
            $table->integer('id_type')->nullable()->default(0)->comment('文章类型');
            $table->string('page_code', 32)->nullable()->default('')->comment('自定义页面编码');
            $table->integer('group_id')->nullable()->default(0)->comment('团购ID');
            $table->string('return_url', 500)->nullable()->default('')->comment('返回URL地址');
            $table->string('image_url', 500)->nullable()->default('')->comment('二维码地址');
            $table->bigInteger('ctime')->comment('创建时间');
            $table->bigInteger('utime')->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_poster_log');
    }
}
