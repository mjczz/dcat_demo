<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsParamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_params', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50)->nullable()->comment('参数名称');
            $table->text('value')->nullable()->comment('参数值');
            $table->string('type', 10)->nullable()->comment('参数类型，text文本框，radio单选，checkbox复选框');
            $table->bigInteger('ctime')->nullable()->comment('创建时间');
            $table->bigInteger('utime')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_params');
    }
}
