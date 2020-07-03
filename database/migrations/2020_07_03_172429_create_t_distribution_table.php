<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDistributionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_distribution', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->default(0)->index('user_id')->comment('用户id');
            $table->string('name', 200)->nullable()->comment('分销商名称');
            $table->unsignedInteger('grade_id')->nullable()->default(0)->comment('分销等级');
            $table->string('mobile', 15)->nullable()->comment('手机号');
            $table->string('weixin', 200)->nullable()->comment('微信号');
            $table->string('qq', 30)->nullable()->comment('qq号');
            $table->string('store_name', 200)->nullable()->comment('店铺名称');
            $table->string('store_logo', 32)->nullable()->comment('店铺logo');
            $table->string('store_banner', 32)->nullable()->comment('店铺banner');
            $table->integer('store_area_id')->nullable()->comment('店铺区域');
            $table->string('store_address')->nullable()->comment('店铺详细地址');
            $table->string('store_label')->nullable()->comment('店铺标签');
            $table->string('store_desc')->nullable()->comment('店铺简介');
            $table->boolean('verify')->unsigned()->nullable()->default(2)->comment('审核状态，1审核通过，2待审核，3审核拒绝');
            $table->string('license_url')->default('')->comment('营业执照地址');
            $table->string('license_info')->default('')->comment('营业执照信息');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('verify_time')->nullable()->comment('审核时间');
            $table->unsignedBigInteger('isdel')->nullable()->comment('是否删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_distribution');
    }
}
