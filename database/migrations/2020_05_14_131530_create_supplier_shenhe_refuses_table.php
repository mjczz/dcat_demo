<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierShenheRefusesTable extends Migration
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
            $table->integer("supplier_id")->comment("供货商id");
            $table->tinyInteger("sup_shenhe_refuse_type")->default(0)->comment("供货商审核拒绝类型");
            $table->string('refuse_remark', 300)->default('')->comment('拒绝理由');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_shenhe_refuse` COMMENT '供货商-入驻提交审核的拒绝理由'";
        \Illuminate\Support\Facades\DB::statement($sql);
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
