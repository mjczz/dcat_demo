<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTWeimobCenterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_weimob_center', function (Blueprint $table) {
            $table->integer('id', true)->comment('自增id');
            $table->string('uuid', 300)->nullable()->default('')->comment('微盟消息编码');
            $table->tinyInteger('type')->nullable()->default(0)->comment('0=默认,1=订单新增,2=订单状态变更,3=新增维权,4=同意维权后退款,5=售后退货,6=取消维权,7=完成维权');
            $table->string('askurl', 500)->nullable()->default('')->comment('请求url地址');
            $table->text('askheader')->nullable()->comment('请求header数据json');
            $table->text('params')->nullable()->comment('请求参数json');
            $table->string('surl', 500)->nullable()->default('')->comment('来源url');
            $table->text('sdata')->nullable()->comment('来源数据json');
            $table->text('resdata')->nullable()->comment('请求返回值');
            $table->boolean('status')->nullable()->default(0)->comment('是否成功（0未成功，1成功）');
            $table->bigInteger('ctime')->nullable()->comment('创建时间');
            $table->bigInteger('utime')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_weimob_center');
    }
}
