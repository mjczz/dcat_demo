<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLicenseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_license', function (Blueprint $table) {
            $table->char('id', 32)->primary()->comment('图片ID');
            $table->string('name', 50)->nullable()->comment('图片名称');
            $table->string('url')->nullable()->comment('绝对地址');
            $table->string('path')->nullable()->comment('物理地址');
            $table->enum('type', ['web', 'local'])->nullable()->default('local')->comment('存储引擎');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel')->comment('删除标志 有数据代表删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_license');
    }
}
