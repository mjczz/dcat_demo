<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 50)->nullable()->default('')->comment('可视化区域编码');
            $table->string('name', 50)->nullable()->default('')->comment('可编辑区域名称');
            $table->string('desc')->nullable()->default('')->comment('描述');
            $table->unsignedTinyInteger('layout')->nullable()->default(1)->comment('布局样式编码，1，手机端');
            $table->boolean('type')->unsigned()->nullable()->default(1)->comment('1手机端，2PC端');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pages');
    }
}
