<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->char('sup_code', 14)->default('')->comment('供应商编码');
            $table->string('ucode', 128)->default('')->comment('用户编码（对应蜜购体系用户编码）');
            $table->string('username', 20)->nullable()->comment('用户名');
            $table->char('password', 32)->nullable()->comment('密码 md5(md5()+创建时间)');
            $table->string('mobile', 15)->nullable()->comment('手机号');
            $table->boolean('sex')->unsigned()->nullable()->default(3)->comment('1=男 2=女 3=未知');
            $table->date('birthday')->nullable()->comment('生日');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('nickname', 50)->nullable()->comment('昵称');
            $table->decimal('balance', 10)->default(0.00)->comment('余额');
            $table->unsignedInteger('point')->default(0)->comment('积分');
            $table->unsignedTinyInteger('grade')->default(0)->comment('用户等级');
            $table->unsignedBigInteger('ctime')->nullable()->index('ctime');
            $table->unsignedBigInteger('utime')->nullable();
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('1 = 正常 2 = 停用');
            $table->unsignedInteger('pid')->nullable()->default(0)->index('pid')->comment('所属大区id');
            $table->integer('bid')->default(0)->index('bid')->comment('所属分公司id');
            $table->tinyInteger('bid_grade')->default(0)->comment('绑定服务商/业务商 商家级别');
            $table->decimal('bid_balance', 10)->unsigned()->default(0.00)->comment('服务商余额');
            $table->integer('lockid')->nullable()->default(0)->index('lockid')->comment('锁定人id');
            $table->integer('inviteid')->default(0)->comment('邀请人用户id');
            $table->unsignedBigInteger('locktime')->nullable()->comment('锁定时间');
            $table->bigInteger('invitetime')->nullable()->comment('邀请时间');
            $table->unsignedBigInteger('isdel')->nullable()->comment('删除标志 有数据就是删除');
            $table->text('check_update')->nullable()->comment('订单支付完成，判断用户是否可以更新，若可以更新，存下待更新的grade_id，待订单完成或收货后，再真正的更新用户的等级');
            $table->tinyInteger('level')->nullable()->default(1)->comment('1会v1,2会v2,3会v3,4s1,5s2,6s3,7白金会员8黄金');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user');
    }
}
