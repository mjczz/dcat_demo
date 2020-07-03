<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFormSubmitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_form_submit', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('form_id')->default(0)->comment('表单id');
            $table->string('form_name')->nullable()->default('')->comment('表单名称');
            $table->unsignedBigInteger('user_id')->nullable()->default(0)->comment('会员id');
            $table->decimal('money', 20)->unsigned()->nullable()->default(0.00)->comment('总金额');
            $table->boolean('pay_status')->unsigned()->default(2)->comment('2未支付，1已支付。支付状态');
            $table->boolean('status')->nullable()->default(2)->comment('表单状态，1已处理，2未处理');
            $table->string('feedback')->nullable()->comment('表单反馈');
            $table->string('ip', 20)->nullable()->default('')->comment('提交人ip');
            $table->unsignedBigInteger('ctime')->nullable()->default(0)->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_form_submit');
    }
}
