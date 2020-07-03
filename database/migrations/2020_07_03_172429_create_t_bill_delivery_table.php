<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillDeliveryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_delivery', function (Blueprint $table) {
            $table->string('delivery_id', 20)->primary();
            $table->string('order_id', 20)->comment('订单ID 关联order.id');
            $table->unsignedInteger('user_id')->nullable()->comment('用户id 关联user.id');
            $table->string('logi_code', 50)->nullable()->comment('物流公司编码');
            $table->string('logi_no', 50)->nullable()->comment('物流单号');
            $table->longText('logi_information')->nullable()->comment('快递物流信息');
            $table->unsignedTinyInteger('logi_status')->default(0)->comment('0快递信息可能更新  1快递信息不更新了');
            $table->unsignedInteger('ship_area_id')->nullable()->comment('收货地区ID');
            $table->string('ship_address', 200)->nullable()->comment('收货详细地址');
            $table->string('ship_name', 50)->nullable()->comment('收货人姓名');
            $table->char('ship_mobile', 15)->nullable()->comment('收货电话');
            $table->unsignedBigInteger('confirm_time')->nullable()->comment('确认s收货时间');
            $table->boolean('status')->unsigned()->nullable()->default(2)->comment('状态 1=准备发货 2=已发货 3=已确认 4=其他');
            $table->string('memo')->nullable()->comment('备注');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->integer('delete_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bill_delivery');
    }
}
