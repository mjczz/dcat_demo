<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWeixinMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_weixin_menu', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('menu_id')->comment('菜单id');
            $table->integer('pid')->default(0)->comment('父级菜单');
            $table->string('name', 100)->comment('菜单名称');
            $table->string('type', 11)->comment('菜单类型');
            $table->text('params')->comment('菜单参数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_weixin_menu');
    }
}
