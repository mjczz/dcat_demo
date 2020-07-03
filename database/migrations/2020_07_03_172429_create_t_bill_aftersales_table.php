<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillAftersalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_aftersales', function (Blueprint $table) {
            $table->string('aftersales_id', 20)->primary()->comment('售后单id');
            $table->string('order_id', 20)->nullable()->comment('订单ID 关联order.id');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID 关联user.id');
            $table->boolean('type')->unsigned()->default(1)->comment('售后类型，1=只退款，2退款退货');
            $table->decimal('refund', 10)->unsigned()->default(0.00)->comment('退款金额');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('状态 1=未审核 2=审核通过 3=审核拒绝');
            $table->string('reason')->comment('退款原因');
            $table->string('mark')->nullable()->comment('卖家备注，如果审核失败了，会显示到前端');
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
        Schema::dropIfExists('t_bill_aftersales');
    }
}
