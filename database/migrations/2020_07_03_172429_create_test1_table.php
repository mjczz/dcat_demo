<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTest1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test1', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('p1', 200)->nullable()->index('p1');
            $table->string('p2', 200)->nullable()->index('p2');
            $table->string('p3', 200)->nullable();
            $table->string('p4', 200)->nullable();
            $table->string('p5', 200)->nullable()->index('p5');
            $table->string('p6', 200)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('test1');
    }
}
