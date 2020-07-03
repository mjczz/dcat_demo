<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_grade', function (Blueprint $table) {
            $table->unsignedTinyInteger('id')->primary()->comment('id');
            $table->string('name', 60)->comment('名称');
            $table->boolean('is_def')->default(2)->comment('1默认，2不默认');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_grade');
    }
}
