<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTManageRoleRelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_manage_role_rel', function (Blueprint $table) {
            $table->unsignedInteger('manage_id')->comment('管理员ID 关联manage.id');
            $table->unsignedInteger('role_id')->nullable()->comment('角色ID 关联role.id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_manage_role_rel');
    }
}
