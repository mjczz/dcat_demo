<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTVenueGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_venue_goods', function (Blueprint $table) {
            $table->integer('id', true)->comment('自增ID');
            $table->char('venue_code', 32)->comment('会场编码');
            $table->char('goods_bn', 128)->comment('商品编码');
            $table->decimal('brokerage', 10)->unsigned()->default(0.00)->comment('佣金');
            $table->tinyInteger('brokerage_type')->default(1)->comment('佣金类型1固定值,2百分比');
            $table->timestamp('update_time')->useCurrent()->comment('更新时间');
            $table->unique(['venue_code', 'goods_bn'], 'uk_venue_code_goods_bn');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_venue_goods');
    }
}
