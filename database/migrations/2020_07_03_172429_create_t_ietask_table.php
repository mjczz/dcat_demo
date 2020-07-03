<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTIetaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_ietask', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 200)->nullable()->comment('任务名称');
            $table->string('message')->nullable()->comment('任务消息');
            $table->string('file_type', 20)->nullable()->default('csv')->comment('文件类型');
            $table->unsignedInteger('ctime')->nullable()->comment('创建时间');
            $table->integer('utime')->nullable()->comment('更新时间');
            $table->boolean('type')->nullable()->comment('任务类型，1为导出，2为导入');
            $table->boolean('status')->unsigned()->nullable()->default(0)->comment('任务状态，0为等待执行，1正在导出，2导出成功，3导出失败，4正在导入，5导入成功，6导入失败，7中断，8部分导入');
            $table->text('params')->nullable()->comment('相关参数');
            $table->string('file_name')->nullable()->comment('文件名称');
            $table->string('file_size', 200)->nullable()->comment('文件大小');
            $table->string('file_path')->nullable()->comment('文件路径');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_ietask');
    }
}
