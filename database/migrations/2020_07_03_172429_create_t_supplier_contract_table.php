<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierContractTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_contract', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->default(0)->comment('供货商id');
            $table->string('account_id', 200)->default('')->comment('个人账户id');
            $table->string('per_name', 50)->default('')->comment('个人账号name');
            $table->string('trd_user_id_per', 200)->default('')->comment('创建个人账户的用户唯一标识');
            $table->string('org_account_id', 200)->default('')->comment('企业账户id');
            $table->string('org_name', 100)->default('')->comment('企业账号-org_name');
            $table->string('trd_user_id_org', 200)->default('')->comment('创建企业用户的唯一标识,不能与trd_user_id_per相同');
            $table->tinyInteger('sign_status')->default(1)->comment('合同状态：1待签约 2签约中 3已签约 4签约失败');
            $table->string('contract_sign_url', 1000)->default('')->comment('合同签署链接');
            $table->string('contract_name', 100)->default('')->comment('合同名称');
            $table->string('flow_id', 200)->default('')->comment('合同流程id');
            $table->string('id_number', 100)->default('')->comment('证件号');
            $table->string('mobile', 50)->default('')->comment('手机号码，手机号为空时无法使用短信意愿认证');
            $table->string('file_id', 100)->default('')->comment('签署流程文件id');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer('delete_time')->nullable();
            $table->string('sign_time', 30)->default('')->comment('签约时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_contract');
    }
}
