<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPopupWindowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_popup_window', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->index('uid_for_count')->comment('用户id');
            $table->unsignedInteger('act_id')->comment('活动id');
            $table->unsignedBigInteger('popuptime')->nullable()->comment('弹出时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_popup_window');
    }
}
