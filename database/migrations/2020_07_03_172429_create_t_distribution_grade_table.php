<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDistributionGradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_distribution_grade', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grade_id')->nullable()->comment('会员等级id');
            $table->boolean('is_default')->unsigned()->nullable()->default(2)->comment('是否默认会员等级，1是，2否');
            $table->boolean('upgrade')->unsigned()->nullable()->default(2)->comment('是否可以自动升级，1是，2否');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_distribution_grade');
    }
}
