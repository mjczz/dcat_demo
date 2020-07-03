<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_message', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->index('user_id')->comment('用户id');
            $table->string('code', 60)->comment('消息编码');
            $table->string('params', 5000)->comment('参数');
            $table->text('content')->comment('内容');
            $table->unsignedBigInteger('ctime')->comment('创建时间');
            $table->unsignedBigInteger('utime')->comment('查看时间');
            $table->boolean('status')->unsigned()->default(1)->comment('1未查看，2已查看');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_message');
    }
}
