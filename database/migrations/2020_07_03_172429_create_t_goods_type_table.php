<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_type', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 20)->nullable()->comment('类型名称');
            $table->text('params')->nullable()->comment('参数序列号存储 array(参数组名=>array(\'参数1\',\'参数二\'))');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_type');
    }
}
