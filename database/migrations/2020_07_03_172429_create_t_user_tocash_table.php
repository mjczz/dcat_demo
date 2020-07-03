<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserTocashTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_tocash', function (Blueprint $table) {
            $table->increments('id')->comment('ID号');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID');
            $table->decimal('money')->unsigned()->default(0.00)->comment('提现金额');
            $table->string('bank_name', 60)->nullable()->comment('银行名称');
            $table->string('bank_code', 12)->nullable()->comment('银行缩写');
            $table->string('phone', 12)->nullable()->default('')->comment('预留手机号');
            $table->string('idcard', 30)->nullable()->default('')->comment('身份证号');
            $table->unsignedInteger('bank_area_id')->nullable()->comment('账号地区ID');
            $table->string('account_bank')->nullable()->comment('开户行');
            $table->string('account_name', 60)->nullable()->comment('账户名');
            $table->string('card_number', 30)->nullable()->comment('卡号');
            $table->decimal('withdrawals')->unsigned()->default(0.00)->comment('提现服务费');
            $table->decimal('realdrawals')->nullable()->comment('实际到账');
            $table->smallInteger('sign')->nullable()->comment('是否签约 此处不做签约依据 根据bank表做依据');
            $table->unsignedSmallInteger('type')->default(1)->comment('1默认，2提现成功，3提现失败');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_tocash');
    }
}
