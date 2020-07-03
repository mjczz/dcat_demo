<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('supplier_id')->comment('供货商id');
            $table->string('production_license', 500)->default('')->comment('生产许可证');
            $table->string('circulation_license', 500)->default('')->comment('流通许可证');
            $table->string('authorization_letter', 500)->default('')->comment('授权书');
            $table->string('license_for_operation', 500)->default('')->comment('经营许可证');
            $table->string('oem_license', 2000)->default('')->comment('贴牌经销商--生产商家资料与经营许可');
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
        Schema::dropIfExists('t_supplier_enterprise_info');
    }
}
