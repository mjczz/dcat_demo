<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer("supplier_id")->comment("供货商id");
            $table->string('enterprise_name', 50)->default('')->comment('企业名称');
            $table->string('legal_person', 30)->default('')->comment('法人代表');
            $table->string('duty_paragraph', 100)->default('')->comment('税号');
            $table->string('organizer_file', 100)->default('')->comment('主办单位证件');
            $table->string('faren_zheng_file', 100)->default('')->comment('企业法人身份证人像面');
            $table->string('faren_fan_file', 100)->default('')->comment('企业法人身份证国徽面');
            $table->string('taxpayer_file', 100)->default('')->comment('一般纳税人资格证明');
            $table->string('faren_shouchi_zheng_file', 100)->default('')->comment('企业法人手持身份证人像面');
            $table->string('faren_shouchi_fan_file', 100)->default('')->comment('企业法人手持身份证国徽面');
            $table->string('duijie_person', 30)->default('')->comment('对接人');
            $table->string('duijie_person_mobile', 50)->default('')->comment('对接人手机号');
            $table->string('duijie_person_email', 30)->default('')->comment('对接人邮箱');
            $table->string('recommend_person', 30)->default('')->comment('推荐人');
            $table->string('recommend_person_card', 10)->default('')->comment('推荐人身份证号后4位');
            $table->string('recommend_person_mobile', 30)->default('')->comment('推荐人手机号');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_base_info` COMMENT '供货商-基本信息表'";
        \Illuminate\Support\Facades\DB::statement($sql);
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
