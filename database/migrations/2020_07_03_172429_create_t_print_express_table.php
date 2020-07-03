<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPrintExpressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_print_express', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_id', 20)->nullable()->index('order_id')->comment('订单号');
            $table->string('shipper_code', 50)->nullable()->comment('快递公司编码');
            $table->string('logistic_code', 400)->nullable()->comment('快递单号');
            $table->text('print_template')->nullable()->comment('面单打印模板内容(html格式)');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
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
        Schema::dropIfExists('t_print_express');
    }
}
