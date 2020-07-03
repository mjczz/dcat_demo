<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_products', function (Blueprint $table) {
            $table->increments('id')->comment('货品ID');
            $table->unsignedInteger('goods_id')->nullable()->index('goods_id')->comment('商品id 关联goods.id');
            $table->string('barcode', 128)->nullable()->comment('货品条码');
            $table->string('sn', 128)->nullable()->comment('商品编码');
            $table->decimal('price', 10)->nullable()->comment('货品价格');
            $table->decimal('costprice', 10)->nullable()->comment('货品成本价');
            $table->decimal('mktprice', 10)->nullable()->comment('货品市场价');
            $table->boolean('marketable')->unsigned()->nullable()->comment('上架标志 1=上架 2=下架');
            $table->boolean('jd_marketable')->nullable()->comment('1主站（jd.com）上架；0下架');
            $table->string('jd_skuid', 128)->nullable()->comment('京东的sku ID');
            $table->unsignedInteger('stock')->nullable()->default(0)->comment('库存');
            $table->unsignedInteger('freeze_stock')->nullable()->default(0)->comment('冻结库存');
            $table->text('spes_desc')->nullable()->comment('规格值逗号分隔存储');
            $table->boolean('is_defalut')->unsigned()->nullable()->default(2)->comment('是否默认货品 1=是 2=否');
            $table->boolean('is_self')->nullable()->default(1)->index('uk_is_self')->comment('1自营，0非自营');
            $table->char('image_id')->nullable()->comment('规格图片ID');
            $table->integer('change_price_time')->nullable()->comment('改价时间');
            $table->string('change_price_detail', 500)->nullable()->default('')->comment('改价json明细，只记录上一次价格和时间');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel')->comment('删除标志');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_products');
    }
}
