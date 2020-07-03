<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLogisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_logistics', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logi_name', 30)->nullable()->comment('物流公司名称');
            $table->string('logi_code', 50)->nullable()->unique('logi_code')->comment('物流公司编码');
            $table->unsignedTinyInteger('sort')->nullable()->default(100)->index('sort')->comment('排序 越小越靠前');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_logistics');
    }
}
