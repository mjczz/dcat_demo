<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('v_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone')->nullable();
            $table->integer('areaid')->nullable();
            $table->string('password')->nullable();
            $table->dateTime('createtime')->nullable();
            $table->dateTime('logintime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('v_user');
    }
}
