<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTErrorLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_error_log', function (Blueprint $table) {
            $table->increments('id');
            $table->text('err_msg')->nullable();
            $table->string('err_type', 100)->default('')->comment('类型');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_error_log');
    }
}
