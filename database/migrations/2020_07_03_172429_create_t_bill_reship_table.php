<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillReshipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_reship', function (Blueprint $table) {
            $table->string('reship_id', 20)->primary();
            $table->string('order_id', 20)->comment('订单ID 关联order.id');
            $table->string('aftersales_id', 20)->comment('售后单id');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID 关联user.id');
            $table->string('logi_code', 50)->nullable()->comment('物流公司编码');
            $table->string('logi_no', 50)->nullable()->comment('物流单号');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('状态 1=审核通过待发货 2=已发退货 3=已收退货');
            $table->string('memo')->nullable()->comment('备注');
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
        Schema::dropIfExists('t_bill_reship');
    }
}
