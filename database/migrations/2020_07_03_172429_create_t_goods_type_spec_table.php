<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsTypeSpecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_type_spec', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->nullable()->comment('商品类型属性名称');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->index('sort')->comment('商品类型属性排序 越小越靠前');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_type_spec');
    }
}
