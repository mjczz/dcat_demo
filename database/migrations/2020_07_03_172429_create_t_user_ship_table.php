<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserShipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_ship', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable()->comment('用户id 关联user.id');
            $table->unsignedInteger('area_id')->nullable()->comment('收货地区ID');
            $table->string('address', 200)->nullable()->comment('收货详细地址');
            $table->string('name', 50)->nullable()->comment('收货人姓名');
            $table->char('mobile', 15)->nullable()->comment('收货电话');
            $table->bigInteger('utime')->comment('更新时间');
            $table->boolean('is_def')->unsigned()->nullable()->comment('是否默认 1=默认 2=不默认');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_ship');
    }
}
