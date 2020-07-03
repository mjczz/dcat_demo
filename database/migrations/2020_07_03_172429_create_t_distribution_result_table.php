<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDistributionResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_distribution_result', function (Blueprint $table) {
            $table->integer('id', true);
            $table->unsignedInteger('grade_id')->nullable()->index('promotion_id')->comment('会员等级ID');
            $table->string('code', 50)->nullable()->comment('佣金编码');
            $table->text('params')->nullable()->comment('佣金设置序列化参数');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_distribution_result');
    }
}
