<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBalanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_balance', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->unsignedSmallInteger('type')->comment('类型');
            $table->decimal('money', 10)->comment('金额');
            $table->decimal('balance', 10)->comment('余额');
            $table->string('source_id', 20)->comment('资源id');
            $table->string('memo', 200)->comment('描述');
            $table->unsignedBigInteger('ctime')->comment('创建时间');
            $table->integer('fix_bug')->default(0)->comment('是否更新了money的正负 0否 1是');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_balance');
    }
}
