<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierTBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_t_brand', function (Blueprint $table) {
            $table->integer("supplier_id")->comment("供货商id");
            $table->integer("t_brand_id")->comment("t_brand id");
        });

        $sql = "ALTER TABLE `t_supplier_t_brand` COMMENT '供货商-关联t_brand'";
        \Illuminate\Support\Facades\DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_t_brand');
    }
}
