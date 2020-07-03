<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPintuanRuleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pintuan_rule', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 40)->nullable()->default('')->comment('活动名称');
            $table->unsignedBigInteger('stime')->nullable()->comment('开始时间');
            $table->unsignedBigInteger('etime')->nullable()->comment('结束时间');
            $table->boolean('people_number')->unsigned()->default(2)->comment('人数 2-10人');
            $table->unsignedInteger('significant_interval')->default(24)->comment('单位 小时');
            $table->decimal('discount_amount', 10)->default(0.00)->comment('优惠金额');
            $table->unsignedSmallInteger('sort')->default(100)->comment('排序');
            $table->boolean('status')->default(1)->comment('状态 1=开启（默认）  2=禁用');
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
        Schema::dropIfExists('t_pintuan_rule');
    }
}
