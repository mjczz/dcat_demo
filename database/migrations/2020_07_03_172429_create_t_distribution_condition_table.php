<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDistributionConditionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_distribution_condition', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('grade_id')->nullable()->index('promotion_id')->comment('会员等级ID');
            $table->string('code', 50)->nullable()->comment('升级条件编码');
            $table->text('params')->nullable()->comment('其它参数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_distribution_condition');
    }
}
