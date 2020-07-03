<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable()->comment('活动名称');
            $table->string('url')->nullable()->comment('活动跳转的url');
            $table->string('image_url')->nullable()->comment('图片的url');
            $table->unsignedBigInteger('starttime')->nullable()->comment('开始时间');
            $table->unsignedBigInteger('endtime')->nullable()->comment('结束时间');
            $table->string('text')->nullable()->comment('活动说明');
            $table->unsignedTinyInteger('is_enabled')->nullable()->default(0)->comment('是否启用，0不，1启用');
            $table->unsignedInteger('frequency')->nullable()->comment('弹出频率，单位分钟');
            $table->tinyInteger('type')->nullable()->comment('1试用，2。。。');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_activities');
    }
}
