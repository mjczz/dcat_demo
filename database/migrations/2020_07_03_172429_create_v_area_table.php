<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_area', function (Blueprint $table) {
            $table->increments('id');
            $table->string('membernum', 20)->nullable()->comment('会员个数');
            $table->integer('memberadd')->nullable()->comment('会员比昨日');
            $table->string('ordernum', 20)->nullable()->comment('订单总数');
            $table->integer('orderadd')->nullable()->comment('比昨日订单增加');
            $table->decimal('ordermoney', 16)->nullable()->comment('订单总金额');
            $table->decimal('ordermoneyadd', 16)->nullable()->comment('比昨日');
            $table->date('updatetime')->nullable()->comment('更新时间');
            $table->integer('areaid')->nullable()->comment('地区id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_area');
    }
}
