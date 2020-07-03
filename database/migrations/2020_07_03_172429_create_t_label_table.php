<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLabelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_label', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 20)->nullable()->comment('标签名称');
            $table->string('style', 20)->nullable()->default('hot')->comment('标签样式');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_label');
    }
}
