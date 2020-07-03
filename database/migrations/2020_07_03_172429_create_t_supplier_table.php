<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier', function (Blueprint $table) {
            $table->increments('id')->comment('供货商id');
            $table->string('username', 30)->default('')->comment('供货商姓名');
            $table->boolean('status')->unsigned()->default(1)->comment('1 = 正常 2 = 停用');
            $table->integer('ctime')->default(0)->comment('添加时间');
            $table->integer('utime')->default(0)->comment('更新时间');
            $table->tinyInteger('settlement_type')->default(0)->comment('结算方式：1半月结 2月结 3日结 4周结');
            $table->integer('chuzhang_date_1_15')->default(0)->comment('1-15日订单对应的出账日 本月和次月出账');
            $table->integer('chuzhang_date_16_end')->default(0)->comment('16日到月末订单对应的出账日 只能是次月出账');
            $table->boolean('chuzhang_month_1_15')->default(1)->comment('1-15日订单，出账日是 1本月 2次月');
            $table->integer('after_days')->default(0)->comment('n天后出账');
            $table->boolean('week_day')->default(0)->comment('周几出账上周的订单');
            $table->integer('month_day')->default(0)->comment('月结方式的日期');
            $table->boolean('supplier_shenhe_status')->default(0)->comment('审核状态：1未提交审核 2已提交审核（审核中） 3审核通过 4审核拒绝');
            $table->integer('submit_shenhe_time')->default(0)->comment('供货商入驻，提交审核时间');
            $table->integer('success_shenhe_time')->default(0)->comment('供货商入驻，审核通过时间');
            $table->boolean('supplier_frozen_status')->default(1)->comment('供货商冻结状态：1未冻结 2已冻结');
            $table->integer('success_code')->default(0)->comment('供货商入驻，审核通过编号');
            $table->string('stop_cooperation_reason', 300)->nullable()->default('')->comment('停止合作原因');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier');
    }
}
