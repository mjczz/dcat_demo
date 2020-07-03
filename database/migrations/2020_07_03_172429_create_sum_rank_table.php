<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSumRankTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sum_rank', function (Blueprint $table) {
            $table->char('rank_id', 32)->comment('排行ID');
            $table->string('field_value')->comment('字段值');
            $table->integer('sort_value')->comment('排序值');
            $table->unsignedBigInteger('update_time')->comment('更新时间');
            $table->primary(['rank_id', 'field_value']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sum_rank');
    }
}
