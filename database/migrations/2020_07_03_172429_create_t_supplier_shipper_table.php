<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierShipperTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_shipper', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->comment('供货商id');
            $table->string('ship_info', 100)->default('')->comment('发货信息');
            $table->string('counterpart', 50)->default('')->comment('对接人姓名');
            $table->string('mobile', 50)->default('')->comment('对接人号码');
            $table->integer('area_id_1')->default(0)->comment('省id');
            $table->integer('area_id_2')->default(0)->comment('市id');
            $table->integer('area_id_3')->default(0)->comment('区id');
            $table->integer('ship_area_id')->default(0)->comment('发货地区id，有可能是市id有可能是区id');
            $table->string('ship_address', 50)->default('')->comment('发货详细地址');
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
        Schema::dropIfExists('t_supplier_shipper');
    }
}
