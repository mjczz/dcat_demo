<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTTrialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_trial', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->integer('activities_id')->nullable();
            $table->string('bn', 128)->nullable()->comment('商品编码');
            $table->boolean('marketable')->unsigned()->nullable()->default(1)->comment('上架标志 1=上架 2=下架');
            $table->string('name', 55)->nullable()->comment('试用商品名称');
            $table->string('image')->nullable()->comment('试用商品图片链接');
            $table->decimal('price', 10)->nullable()->default(0.00)->comment('试用商品价格');
            $table->date('start_time')->nullable()->comment('试用开始时间');
            $table->date('end_time')->nullable()->comment('试用结束时间，起止相同为一期');
            $table->unsignedInteger('apply_time')->nullable()->comment('试用预计审核时间');
            $table->unsignedInteger('stock')->nullable()->default(0)->comment('库存');
            $table->unsignedInteger('freeze_stock')->nullable()->default(0)->comment('冻结库存');
            $table->integer('goods_id');
            $table->string('suolue_image')->nullable();
            $table->unsignedInteger('numbers')->nullable()->comment('一共有多少件试用的供大家申请的');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_trial');
    }
}
