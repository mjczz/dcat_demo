<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_order_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_id', 20)->comment('订单ID 关联order.id');
            $table->unsignedInteger('goods_id')->nullable()->comment('商品ID 关联goods.id');
            $table->unsignedInteger('product_id')->nullable()->comment('货品ID 关联products.id');
            $table->string('sn', 128)->nullable()->comment('货品编码');
            $table->string('bn', 128)->nullable()->comment('商品编码');
            $table->string('name', 200)->nullable()->comment('商品名称');
            $table->decimal('price', 10)->unsigned()->default(0.00)->comment('货品价格单价');
            $table->decimal('costprice', 10)->unsigned()->nullable()->default(0.00)->comment('货品成本价单价');
            $table->decimal('mktprice', 10)->unsigned()->default(0.00)->comment('市场价');
            $table->string('image_url', 300)->comment('图片');
            $table->unsignedSmallInteger('nums')->nullable()->comment('数量');
            $table->decimal('amount', 10)->unsigned()->default(0.00)->comment('总价');
            $table->decimal('promotion_amount', 10)->unsigned()->default(0.00)->comment('商品优惠总金额');
            $table->string('promotion_list')->comment('促销信息');
            $table->decimal('weight', 10)->nullable()->comment('总重量');
            $table->unsignedSmallInteger('sendnums')->nullable()->comment('发货数量');
            $table->text('addon')->nullable()->comment('货品明细序列号存储');
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
        Schema::dropIfExists('t_order_items');
    }
}
