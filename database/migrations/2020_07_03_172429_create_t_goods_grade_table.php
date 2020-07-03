<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_grade', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('goods_id')->nullable()->default(0)->index('idx_goods_id')->comment('商品id');
            $table->unsignedTinyInteger('grade_id')->nullable()->default(1)->comment('会员等级id');
            $table->decimal('grade_price', 10)->unsigned()->nullable()->default(0.00)->comment('会员价');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_grade');
    }
}
