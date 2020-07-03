<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillRefundTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_refund', function (Blueprint $table) {
            $table->string('refund_id', 20)->primary();
            $table->string('aftersales_id', 20)->index('aftersales_id')->comment('售后单id');
            $table->decimal('money', 10)->unsigned()->nullable()->comment('退款金额');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID 关联user.id');
            $table->string('source_id', 20)->comment('资源id，根据type不同而关联不同的表');
            $table->unsignedSmallInteger('type')->default(1)->index('type')->comment('资源类型1=订单,2充值单');
            $table->string('payment_code', 50)->nullable()->comment('退款支付类型编码 默认原路返回 关联支付单表支付编码');
            $table->string('trade_no', 50)->nullable()->comment('第三方平台交易流水号');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('状态 1=未退款 2=已退款 3=退款失败，可以再次退款，4退款拒绝');
            $table->string('memo', 100)->default('')->comment('退款失败原因');
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
        Schema::dropIfExists('t_bill_refund');
    }
}
