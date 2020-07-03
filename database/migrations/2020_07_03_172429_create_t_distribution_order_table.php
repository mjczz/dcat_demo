<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDistributionOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_distribution_order', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('idx_user_id')->comment('用户分销商id');
            $table->integer('sid')->default(0)->comment('业务员ID');
            $table->integer('buy_user_id')->index('idx_buy_id');
            $table->string('order_id', 20)->nullable()->index('idx_order_id')->comment('订单编号');
            $table->decimal('amount', 20)->unsigned()->nullable()->default(0.00)->comment('结算金额');
            $table->boolean('is_settlement')->unsigned()->nullable()->default(2)->comment('是否结算，1已结算，2未结算，3已失效');
            $table->unsignedInteger('level')->nullable()->default(1)->comment('层级');
            $table->bigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('isdel')->nullable()->comment('是否删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_distribution_order');
    }
}
