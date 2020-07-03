<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTSupplierBrandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_supplier_brand', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supplier_id')->comment('供货商id');
            $table->integer('t_brand_id')->comment('关联t_brand id');
            $table->string('name', 50)->default('')->comment('品牌名');
            $table->tinyInteger('brand_is_zhuan')->default(2)->comment('品牌是否是其他公司转让：1是 2否');
            $table->string('trademark_registration', 2000)->default('')->comment('商标注册证明');
            $table->string('trademark_zhuan', 2000)->default('')->comment('商标转让证明');
            $table->string('production_license', 2000)->default('')->comment('生产许可证');
            $table->string('business_license', 2000)->default('')->comment('营业执照');
            $table->string('authorization_letter', 2000)->default('')->comment('授权书');
            $table->string('changjia', 2000)->default('')->comment('生产厂家资料');
            $table->tinyInteger('shenhe_status')->default(1)->comment('审核状态：1审核中 2审核通过 3审核拒绝');
            $table->integer('submit_shenhe_time')->default(0)->comment('提交审核时间');
            $table->integer('success_shenhe_time')->default(0)->comment('审核通过时间');
            $table->string('refuse_reason')->default('')->comment('审核拒绝理由');
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
        Schema::dropIfExists('t_supplier_brand');
    }
}
