<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTQrcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_qrcode', function (Blueprint $table) {
            $table->increments('id');
            $table->char('sn', 8)->default('')->unique('uk_sn')->comment('序列号');
            $table->string('batch_number', 32)->default('')->comment('批次号');
            $table->string('image_url')->default('')->comment('图片地址');
            $table->string('image_wx_url')->default('')->comment('小程序图片地址');
            $table->timestamp('create_time')->useCurrent()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_qrcode');
    }
}
