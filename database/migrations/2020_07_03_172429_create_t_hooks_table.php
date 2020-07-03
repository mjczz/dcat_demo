<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTHooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_hooks', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 50)->nullable()->comment('钩子名称');
            $table->text('description')->nullable()->comment('钩子描述');
            $table->boolean('type')->nullable()->default(1)->comment('钩子类型,1是控制器，2是视图');
            $table->text('addons')->nullable()->comment('钩子挂载的插件，逗号分隔');
            $table->integer('ctime')->nullable()->comment('创建时间');
            $table->integer('utime')->nullable()->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_hooks');
    }
}
