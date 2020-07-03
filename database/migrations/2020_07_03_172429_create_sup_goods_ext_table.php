<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupGoodsExtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_goods_ext', function (Blueprint $table) {
            $table->increments('goods_ext_id')->comment('商品配置ID');
            $table->char('sup_code', 14)->comment('供应商编码');
            $table->unsignedInteger('goods_id')->comment('商品ID');
            $table->decimal('price', 10)->unsigned()->default(0.00)->comment('售价');
            $table->decimal('commission_price', 10)->unsigned()->default(0.00)->comment('佣金结算售价');
            $table->unsignedBigInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedBigInteger('update_time')->default(0)->comment('更新时间');
            $table->unique(['sup_code', 'goods_id'], 'UK_COMPANY_ID_GOODS_ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_goods_ext');
    }
}
