<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupGoodsExtOgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_goods_ext_og', function (Blueprint $table) {
            $table->increments('id')->comment('日志ID');
            $table->char('event_id', 128)->comment('行为ID');
            $table->unsignedInteger('goods_ext_id')->comment('商品配置ID');
            $table->char('sup_code', 14)->comment('供应商编码');
            $table->unsignedInteger('goods_id')->comment('商品ID');
            $table->decimal('price', 10)->unsigned()->default(0.00)->comment('售价');
            $table->decimal('commission_price', 10)->unsigned()->default(0.00)->comment('佣金结算售价');
            $table->unsignedInteger('manage_id')->default(0)->comment('管理员ID');
            $table->unsignedBigInteger('create_time')->default(0)->comment('创建时间');
            $table->index(['sup_code', 'goods_id'], 'company_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_goods_ext_og');
    }
}
