<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPromotionResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_promotion_result', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('promotion_id')->nullable()->index('promotion_id')->comment('促销ID');
            $table->string('code', 50)->nullable()->comment('促销条件编码');
            $table->text('params')->nullable()->comment('支付配置参数序列号存储');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_promotion_result');
    }
}
