<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsTypeSpecValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_type_spec_value', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('spec_id')->nullable()->index('spec_id')->comment('属性ID 关联goods_type_spec.id');
            $table->string('value', 50)->nullable()->comment('属性值');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->index('sort')->comment('排序 越小越靠前');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_type_spec_value');
    }
}
