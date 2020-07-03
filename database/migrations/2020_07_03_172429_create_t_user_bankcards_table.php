<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserBankcardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_bankcards', function (Blueprint $table) {
            $table->increments('id')->comment('ID号');
            $table->unsignedInteger('user_id')->nullable()->comment('用户ID');
            $table->string('bank_name', 60)->nullable()->comment('银行名称');
            $table->string('bank_code', 12)->nullable()->comment('银行缩写');
            $table->unsignedInteger('bank_area_id')->nullable()->comment('账号地区ID');
            $table->string('account_bank')->nullable()->comment('开户行');
            $table->string('account_name', 60)->nullable()->comment('账户名');
            $table->string('phone', 12)->nullable()->default('')->comment('预留手机号');
            $table->string('idcard', 30)->nullable()->default('')->comment('身份证号');
            $table->string('card_number', 30)->nullable()->comment('卡号');
            $table->boolean('card_type')->nullable()->default(1)->comment('银行卡类型: 1=储蓄卡 2=信用卡');
            $table->boolean('is_default')->unsigned()->nullable()->default(2)->comment('默认卡 1=默认 2=不默认');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
            $table->smallInteger('sign')->nullable()->default(1)->comment('1未签约  2已签约');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_bankcards');
    }
}
