<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierGoodsExamineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_goods_examine', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('goods_id')->nullable()->default(0)->index('goods_id')->comment('父级评价ID');
            $table->string('content', 500)->nullable()->comment('拒绝内容');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->integer('supplier_id')->nullable()->comment('供应商id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_goods_examine');
    }
}
