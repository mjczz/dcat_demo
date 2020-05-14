<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierShippersTable extends Migration
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
            $table->integer("supplier_id")->comment("供货商id");
            $table->string('ship_info', 100)->default('')->comment('发货信息');
            $table->string('counterpart', 50)->default('')->comment('对接人新买');
            $table->string('mobile', 50)->default('')->comment('对接人号码');
            $table->integer("ship_area_id")->comment("发货地区ID");
            $table->string('ship_address', 50)->default('')->comment('发货详细地址');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_shipper` COMMENT '供货商-发货人'";
        \Illuminate\Support\Facades\DB::statement($sql);
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
