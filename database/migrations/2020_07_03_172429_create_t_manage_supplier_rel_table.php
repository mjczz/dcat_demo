<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTManageSupplierRelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_manage_supplier_rel', function (Blueprint $table) {
            $table->unsignedInteger('manage_id')->comment('管理员ID');
            $table->unsignedInteger('sup_id')->comment('供应商ID');
            $table->primary(['manage_id', 'sup_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_manage_supplier_rel');
    }
}
