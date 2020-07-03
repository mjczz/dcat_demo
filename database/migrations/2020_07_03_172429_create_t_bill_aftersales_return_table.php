<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillAftersalesReturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_aftersales_return', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->char('aftersales_id', 20)->unique('uk_aftersales_id')->comment('售后单号');
            $table->string('receive_address')->comment('收件地址');
            $table->string('receive_mobile', 20)->comment('收件人手机号');
            $table->string('receive_name', 20)->comment('收件人姓名');
            $table->timestamp('create_time')->useCurrent()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bill_aftersales_return');
    }
}
