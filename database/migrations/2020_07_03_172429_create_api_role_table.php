<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApiRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('api_role', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role_name', 40)->default('')->comment('角色名称');
            $table->boolean('status')->unsigned()->default(1)->comment('状态 1有效 2无效');
            $table->string('checked_keys', 6000)->nullable()->comment('前端传递选中的权限');
            $table->string('permission_keys', 6000)->nullable()->comment('前端传递的所有权限');
            $table->integer('ctime')->nullable();
            $table->integer('utime')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('api_role');
    }
}
