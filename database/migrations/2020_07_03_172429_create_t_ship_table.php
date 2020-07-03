<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTShipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_ship', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->nullable()->comment('配送方式名称');
            $table->boolean('has_cod')->unsigned()->nullable()->default(1)->comment('是否货到付款 1=不是货到付款 2=是货到付款');
            $table->unsignedMediumInteger('firstunit')->nullable()->comment('首重');
            $table->unsignedMediumInteger('continueunit')->nullable()->comment('续重');
            $table->boolean('def_area_fee')->unsigned()->nullable()->default(1)->comment('按地区设置配送费用是否启用默认配送费用 1=启用 2=不启用');
            $table->boolean('type')->unsigned()->nullable()->default(1)->comment('地区类型 1=全部地区 2=指定地区');
            $table->decimal('firstunit_price', 10)->unsigned()->nullable()->comment('首重费用');
            $table->decimal('continueunit_price', 10)->unsigned()->nullable()->comment('续重费用');
            $table->text('exp')->nullable()->comment('配送费用计算表达式');
            $table->string('logi_name', 50)->nullable()->comment('物流公司名称');
            $table->string('logi_code', 50)->nullable()->comment('物流公司编码');
            $table->boolean('is_def')->unsigned()->nullable()->default(2)->comment('是否默认 1=默认 2=不默认');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->index('sort')->comment('配送方式排序 越小越靠前');
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('状态 1=正常 2=停用');
            $table->boolean('free_postage')->unsigned()->nullable()->default(2)->comment('是否包邮，1包邮，2不包邮');
            $table->text('area_fee')->nullable()->comment('地区配送费用');
            $table->decimal('goodsmoney', 20)->nullable()->default(0.00)->comment('商品总额满多少免运费');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_ship');
    }
}
