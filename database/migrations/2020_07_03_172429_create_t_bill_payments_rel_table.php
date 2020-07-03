<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillPaymentsRelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_payments_rel', function (Blueprint $table) {
            $table->string('payment_id', 20)->index('payment_id')->comment('支付单编号');
            $table->string('source_id', 20)->comment('资源编号');
            $table->decimal('money')->unsigned()->comment('金额');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bill_payments_rel');
    }
}
