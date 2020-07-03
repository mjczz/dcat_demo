<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillReshipItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_reship_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reship_id', 20)->index('reship_id')->comment('退款单单id');
            $table->unsignedInteger('order_items_id')->nullable()->comment('订单明细ID 关联order_items.id');
            $table->unsignedInteger('goods_id')->nullable()->comment('商品ID 关联goods.id');
            $table->unsignedInteger('product_id')->nullable()->comment('货品ID 关联products.id');
            $table->string('sn', 30)->nullable()->comment('货品编码');
            $table->string('bn', 30)->nullable()->comment('商品编码');
            $table->string('name', 200)->nullable()->comment('商品名称');
            $table->string('image_url', 100)->comment('图片');
            $table->unsignedSmallInteger('nums')->nullable()->default(1)->comment('数量');
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
        Schema::dropIfExists('t_bill_reship_items');
    }
}
