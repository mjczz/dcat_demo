<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillDeliveryItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_delivery_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('delivery_id', 20)->comment('发货单号 关联bill_delivery.id');
            $table->unsignedInteger('order_items_id')->nullable()->comment('订单明细ID 关联order_items.id');
            $table->unsignedSmallInteger('nums')->nullable()->comment('发货数量');
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
        Schema::dropIfExists('t_bill_delivery_items');
    }
}
