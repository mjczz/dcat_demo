<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSettlementLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_settlement_log', function (Blueprint $table) {
            $table->integer('id', true);
            $table->boolean('status')->nullable()->default(1)->comment('1无异常 2有异常');
            $table->integer('supplier_id')->nullable()->default(0)->comment('用户ID');
            $table->integer('begin')->default(0)->comment('查询的订单起始时间');
            $table->integer('end')->default(0)->comment('查询的订单结束时间');
            $table->string('supplier_name', 50)->nullable()->comment('供货商姓名');
            $table->text('msg')->nullable()->comment('异常信息');
            $table->integer('ctime')->default(0)->comment('创建时间');
            $table->string('supplier_info', 2000)->nullable()->comment('供货商数据对象');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_settlement_log');
    }
}
