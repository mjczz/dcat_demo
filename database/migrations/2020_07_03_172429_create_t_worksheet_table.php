<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWorksheetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_worksheet', function (Blueprint $table) {
            $table->integer('id', true);
            $table->char('phone', 11);
            $table->char('status', 10)->default('未处理');
            $table->string('job_num', 20)->comment('工单号');
            $table->integer('create_time')->comment('提交时间');
            $table->char('type', 10);
            $table->string('title', 20);
            $table->string('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_worksheet');
    }
}
