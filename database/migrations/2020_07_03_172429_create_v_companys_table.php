<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVCompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_companys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone', 20)->nullable()->comment('大区绑定的手机号');
            $table->string('membernum', 10)->nullable()->comment('会员数');
            $table->string('ordernum', 10)->nullable()->comment('订单数');
            $table->decimal('totlenum', 10, 0)->nullable()->comment('订单总金额');
            $table->date('maketime')->nullable()->comment('创建时间');
            $table->integer('areaid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_companys');
    }
}
