<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAddonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_addons', function (Blueprint $table) {
            $table->increments('id')->comment('主键');
            $table->string('name', 40)->comment('插件名或标识');
            $table->string('title', 20)->default('')->comment('中文名');
            $table->text('description')->nullable()->comment('插件描述');
            $table->boolean('status')->default(1)->comment('状态');
            $table->text('config')->nullable()->comment('配置');
            $table->string('author', 40)->nullable()->default('')->comment('作者');
            $table->string('version', 20)->nullable()->default('')->comment('版本号');
            $table->unsignedInteger('ctime')->default(0)->comment('安装时间');
            $table->integer('utime')->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_addons');
    }
}
