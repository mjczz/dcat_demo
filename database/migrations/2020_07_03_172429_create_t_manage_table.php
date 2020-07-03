<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTManageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_manage', function (Blueprint $table) {
            $table->increments('id')->comment('用户ID');
            $table->string('username', 20)->nullable()->unique('username')->comment('用户名');
            $table->char('password', 32)->nullable()->comment('密码 md5(md5()+创建时间)');
            $table->char('mobile', 15)->nullable()->comment('手机号');
            $table->string('avatar')->nullable()->comment('头像');
            $table->string('nickname', 50)->nullable()->comment('昵称');
            $table->unsignedBigInteger('ctime')->nullable();
            $table->unsignedBigInteger('utime')->nullable();
            $table->boolean('status')->unsigned()->nullable()->default(1)->comment('1 = 正常 2 = 停用');
            $table->integer('supplier_id')->nullable()->default(0)->comment('供货商id');
            $table->integer('api_role_id')->nullable()->default(0)->comment('api_role 角色id');
            $table->string('api_token')->nullable()->default('')->comment('api token');
            $table->unsignedInteger('delete_time')->nullable()->comment('软删除时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_manage');
    }
}
