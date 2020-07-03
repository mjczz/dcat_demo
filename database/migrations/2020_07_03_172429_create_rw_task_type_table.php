<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwTaskTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rw_task_type', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('task_name', 50)->nullable()->comment('类型名称');
            $table->string('task_code', 50)->nullable()->comment('任务类型编码');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rw_task_type');
    }
}
