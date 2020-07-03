<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTVersionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_version', function (Blueprint $table) {
            $table->increments('id');
            $table->string('version')->nullable()->comment('app版本');
            $table->string('url', 400)->nullable()->comment('APP下载地址');
            $table->string('type')->nullable()->default('1')->comment('1,wgt格式，2apk格式');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_version');
    }
}
