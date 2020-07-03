<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_supplier', function (Blueprint $table) {
            $table->increments('sup_id')->comment('自增ID');
            $table->char('sup_code', 14)->unique('UK_SUP_CODE')->comment('供应商编码');
            $table->string('sup_name', 32)->index('sup_name')->comment('供应商名称');
            $table->unsignedInteger('sup_cate_id')->default(0)->comment('供应类型ID');
            $table->unsignedTinyInteger('is_verify')->default(0)->comment('审核状态0 未审核 1已审核 2审核拒绝');
            $table->unsignedInteger('invite_user_id')->comment('邀请人ID');
            $table->char('credit_code', 16)->default('')->comment('信用代码');
            $table->string('contact_mobile', 15)->default('0')->comment('联系人手机号');
            $table->string('contact_name', 32)->default('')->comment('联系人姓名');
            $table->unsignedBigInteger('sales_amount')->default(0)->comment('销售额(分)');
            $table->unsignedBigInteger('create_time')->default(0)->comment('创建时间');
            $table->unsignedBigInteger('update_time')->default(0)->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_supplier');
    }
}
