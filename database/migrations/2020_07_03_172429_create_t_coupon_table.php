<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCouponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_coupon', function (Blueprint $table) {
            $table->string('coupon_code', 20)->primary()->comment('优惠券编码');
            $table->unsignedInteger('promotion_id')->comment('优惠券id');
            $table->boolean('is_used')->unsigned()->default(1)->comment('是否使用1未使用，2已使用');
            $table->unsignedInteger('user_id')->nullable()->comment('谁领取了');
            $table->unsignedInteger('used_id')->nullable()->comment('被谁用了');
            $table->unsignedBigInteger('ctime')->comment('创建时间');
            $table->unsignedBigInteger('utime')->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_coupon');
    }
}
