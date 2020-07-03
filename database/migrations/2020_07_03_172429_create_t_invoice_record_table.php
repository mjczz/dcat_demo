<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTInvoiceRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_invoice_record', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 80)->nullable()->comment('发票抬头');
            $table->string('code', 30)->nullable()->comment('发票税号');
            $table->unsignedMediumInteger('frequency')->nullable()->default(1)->comment('被使用次数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_invoice_record');
    }
}
