<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTStoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_store', function (Blueprint $table) {
            $table->increments('id')->comment('id');
            $table->string('store_name', 125)->nullable()->comment('门店名称');
            $table->string('mobile', 13)->nullable()->comment('门店电话/手机号');
            $table->string('linkman', 32)->nullable()->comment('门店联系人');
            $table->char('logo', 32)->nullable()->comment('门店logo');
            $table->unsignedInteger('area_id')->nullable()->comment('门店地区id');
            $table->string('address', 200)->nullable()->comment('门店详细地址');
            $table->string('coordinate', 50)->nullable();
            $table->string('latitude', 40)->nullable()->comment('纬度');
            $table->string('longitude', 40)->nullable()->comment('经度');
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
        Schema::dropIfExists('t_store');
    }
}
