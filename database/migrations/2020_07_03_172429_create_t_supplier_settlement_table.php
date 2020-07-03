<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierSettlementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_settlement', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->integer('supplier_id')->default(0)->comment('供货商id');
            $table->boolean('settlement_status')->default(1)->comment('1未结算 2已结算');
            $table->integer('start_time')->default(0)->comment('账单起始时间');
            $table->integer('end_time')->default(0)->comment('账单结束时间');
            $table->decimal('price_amount', 12)->default(0.00)->comment('总销售价');
            $table->decimal('costprice_amount', 12)->default(0.00)->comment('总成本价');
            $table->boolean('settlement_type')->unsigned()->default(1)->comment('结算方式');
            $table->integer('ctime')->default(0)->comment('添加时间');
            $table->integer('utime')->default(0)->comment('更新时间');
            $table->text('order_items_ids')->nullable()->comment('order_items ids');
            $table->unsignedInteger('delete_time')->nullable()->comment('软删除时间');
            $table->boolean('invoiced_status')->default(1)->comment('1未开票 2已开票');
            $table->string('invoice_url', 200)->default('')->comment('发票地址');
            $table->string('receipt_url', 200)->default('')->comment('回执地址');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_settlement');
    }
}
