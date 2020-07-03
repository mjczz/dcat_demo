<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOperationLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_operation_log', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('manage_id')->nullable()->comment('管理员ID');
            $table->string('controller', 50)->nullable()->comment('操作的控制器名');
            $table->string('method', 50)->nullable()->comment('操作方法名');
            $table->string('desc')->nullable()->comment('操作描述');
            $table->text('content')->nullable()->comment('操作数据序列号存储');
            $table->char('ip', 50)->nullable()->comment('操作IP');
            $table->unsignedBigInteger('ctime')->nullable()->comment('操作时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_operation_log');
    }
}
