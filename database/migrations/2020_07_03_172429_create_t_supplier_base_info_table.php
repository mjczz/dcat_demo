<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierBaseInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_base_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->comment('供货商id');
            $table->tinyInteger('taxpayer')->default(1)->comment('纳税人资格：1一般纳税人 2小规模纳税人');
            $table->tinyInteger('enterprise_type')->default(0)->comment('企业性质：1授权经销商 2生产厂家 3贴牌经销商');
            $table->string('business_brand_name', 50)->default('')->comment('经营品牌名称');
            $table->string('enterprise_name', 50)->default('')->comment('企业名称');
            $table->string('legal_person', 50)->default('')->comment('法人代表');
            $table->string('legal_idcard', 50)->default('')->comment('法人身份证号码');
            $table->string('duty_paragraph', 200)->default('')->comment('税号、统一社会信用代码');
            $table->string('organizer_file', 200)->default('')->comment('主办单位证件');
            $table->string('faren_zheng_file', 200)->default('')->comment('企业法人身份证人像面');
            $table->string('faren_fan_file', 200)->default('')->comment('企业法人身份证国徽面');
            $table->string('bank_kaihu_ming', 200)->default('')->comment('开户名');
            $table->string('bank_kaihu_hang', 200)->default('')->comment('开户行名称');
            $table->string('bank_kaihu_zhanghao', 200)->comment('开户行账号');
            $table->string('taxpayer_file', 200)->default('')->comment('一般纳税人资格证明');
            $table->string('faren_shouchi_zheng_file', 200)->default('')->comment('企业法人手持身份证人像面');
            $table->string('faren_shouchi_fan_file', 200)->default('')->comment('企业法人手持身份证国徽面');
            $table->string('duijie_person', 50)->default('')->comment('对接人');
            $table->string('duijie_person_mobile', 50)->default('')->comment('对接人手机号');
            $table->string('duijie_person_email', 30)->default('')->comment('对接人邮箱');
            $table->string('recommend_person', 50)->default('')->comment('推荐人');
            $table->string('recommend_person_card', 10)->default('')->comment('推荐人身份证号后4位');
            $table->string('recommend_person_mobile', 30)->default('')->comment('推荐人手机号');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer('delete_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_base_info');
    }
}
