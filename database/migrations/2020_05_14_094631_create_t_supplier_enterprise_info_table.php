<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTSupplierEnterpriseInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_enterprise_info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("supplier_id")->comment("供货商id");
            $table->string('production_license', 500)->default('')->comment('生产许可证');
            $table->string('license_for_operation', 500)->default('')->comment('经营许可证');
            $table->string('business_license', 500)->default('')->comment('营业执照');
            $table->string('processing_agreement', 500)->default('')->comment('代加工协议');
            $table->string('authorization_letter', 500)->default('')->comment('授权书');
            $table->string('trademark_registration', 500)->default('')->comment('商标注册证明');
            $table->integer('ctime')->default(0);
            $table->integer('utime')->default(0);
            $table->integer('cuid')->default(0);
            $table->integer('uuid')->default(0);
            $table->integer("delete_time")->nullable();
        });

        $sql = "ALTER TABLE `t_supplier_enterprise_info` COMMENT '供货商-企业信息'";
        \Illuminate\Support\Facades\DB::statement($sql);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_supplier_enterprise_info');
    }
}
