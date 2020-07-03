<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierShenheRefuseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_shenhe_refuse', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->comment('供货商id');
            $table->string('err_option', 300)->default('')->comment('拒绝理由');
            $table->string('err_data', 500)->default('')->comment('拒绝理由');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer('delete_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_shenhe_refuse');
    }
}
