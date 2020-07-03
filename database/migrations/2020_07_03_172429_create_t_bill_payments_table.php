<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_payments', function (Blueprint $table) {
            $table->string('payment_id', 20)->primary()->comment('支付单号');
            $table->decimal('money', 10)->nullable()->default(0.00)->comment('支付金额');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID 关联user.id');
            $table->unsignedSmallInteger('type')->default(1)->index('type')->comment('资源类型1=订单,2充值单');
            $table->boolean('status')->unsigned()->nullable()->default(1)->index('status')->comment('支付状态 1=未支付 2=支付成功 3=其他');
            $table->string('payment_code', 50)->nullable()->comment('支付类型编码 关联payments.code');
            $table->string('ip', 50)->nullable()->comment('支付单生成IP');
            $table->string('params', 200)->comment('支付的时候需要的参数，存的是json格式的一维数组');
            $table->string('payed_msg')->nullable()->comment('支付回调后的状态描述');
            $table->string('trade_no', 50)->nullable()->comment('第三方平台交易流水号');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bill_payments');
    }
}
