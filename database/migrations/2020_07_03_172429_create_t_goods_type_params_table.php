<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsTypeParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_type_params', function (Blueprint $table) {
            $table->unsignedInteger('params_id')->nullable()->default(0)->comment('商品参数id');
            $table->unsignedInteger('type_id')->nullable()->default(0)->comment('商品类型id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_type_params');
    }
}
