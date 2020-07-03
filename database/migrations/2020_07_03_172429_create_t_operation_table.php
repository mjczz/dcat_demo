<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOperationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_operation', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('parent_id')->index('parent_id')->comment('父ID');
            $table->string('name', 50)->nullable()->comment('操作名称');
            $table->string('code', 50)->nullable()->comment('操作编码');
            $table->enum('type', ['m', 'c', 'a'])->default('a')->comment('类型');
            $table->unsignedInteger('parent_menu_id')->index('parent_menu_id')->comment('菜单id');
            $table->unsignedInteger('perm_type')->default(3)->comment('权限许可类型，如果为1就是主体权限，， 如果为2就是半主体权限，在左侧菜单不显示，但是在权限菜单上有体现，如果为3就是关联权限');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->index('sort')->comment('操作排序 越小越靠前');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_operation');
    }
}
