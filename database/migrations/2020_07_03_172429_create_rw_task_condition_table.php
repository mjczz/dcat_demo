<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRwTaskConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rw_task_condition', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('task_id')->nullable()->index('task_id')->comment('任务ID');
            $table->string('code', 50)->nullable()->comment('任务条件编码');
            $table->text('params')->nullable()->comment('任务参数序列号存储');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rw_task_condition');
    }
}
