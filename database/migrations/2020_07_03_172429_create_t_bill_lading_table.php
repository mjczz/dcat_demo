<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillLadingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_lading', function (Blueprint $table) {
            $table->string('id', 20)->primary()->comment('提货单号');
            $table->string('order_id', 20)->nullable()->comment('订单号');
            $table->unsignedInteger('store_id')->nullable()->comment('提货门店ID');
            $table->string('name', 30)->nullable()->comment('提货人姓名');
            $table->string('mobile', 15)->nullable()->comment('提货手机号');
            $table->unsignedInteger('clerk_id')->nullable()->comment('处理店员ID');
            $table->unsignedBigInteger('ptime')->nullable()->comment('提货时间');
            $table->boolean('status')->unsigned()->default(1)->comment('提货状态1=未提货 2=已提货');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('isdel')->nullable()->comment('删除时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bill_lading');
    }
}
