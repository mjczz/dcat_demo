<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_payments', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('code', 50)->nullable()->comment('支付类型编码');
            $table->string('name', 50)->nullable()->comment('支付类型名称');
            $table->boolean('is_online')->unsigned()->nullable()->default(1)->comment('是否线上支付 1=线上支付 2=线下支付');
            $table->text('params')->comment('参数');
            $table->unsignedSmallInteger('sort')->default(100)->comment('排序');
            $table->string('memo', 200)->comment('支付方式描述');
            $table->unsignedSmallInteger('status')->default(2)->index('status')->comment('启用状态 1=启用 2=停用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_payments');
    }
}
