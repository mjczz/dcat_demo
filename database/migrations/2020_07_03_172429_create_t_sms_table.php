<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_sms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mobile', 15)->index('mobile')->comment('手机号码');
            $table->string('code', 60);
            $table->string('params', 5000)->comment('参数');
            $table->string('content', 200)->comment('内容');
            $table->unsignedBigInteger('ctime')->comment('创建时间');
            $table->string('ip', 50)->comment('ip');
            $table->boolean('status')->unsigned()->default(1)->index('status')->comment('1未使用，2已使用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_sms');
    }
}
