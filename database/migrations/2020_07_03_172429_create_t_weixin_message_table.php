<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWeixinMessageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_weixin_message', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 200)->nullable()->comment('消息名称');
            $table->boolean('type')->nullable()->default(1)->comment('消息类型1:文本消息，2:图文消息');
            $table->text('params')->nullable()->comment('消息参数');
            $table->bigInteger('ctime')->nullable()->default(0)->comment('创建时间');
            $table->bigInteger('utime')->nullable()->default(0)->comment('更新时间');
            $table->boolean('is_attention')->nullable()->default(2)->comment('关注回复，1是关注回复，2不是关注回复');
            $table->boolean('is_default')->nullable()->default(2)->comment('是否默认回复，1是，2不是');
            $table->boolean('enable')->nullable()->default(1)->comment('1启用，2禁用');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_weixin_message');
    }
}
