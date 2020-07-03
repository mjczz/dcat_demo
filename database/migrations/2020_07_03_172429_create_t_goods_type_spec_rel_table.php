<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsTypeSpecRelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_type_spec_rel', function (Blueprint $table) {
            $table->unsignedInteger('spec_id')->comment('属性ID');
            $table->unsignedInteger('type_id')->nullable()->comment('类型ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_type_spec_rel');
    }
}
