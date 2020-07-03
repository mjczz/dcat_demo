<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_area', function (Blueprint $table) {
            $table->unsignedInteger('id')->default(0)->primary()->comment('地区ID');
            $table->unsignedInteger('parent_id')->nullable()->default(0)->comment('父级ID');
            $table->boolean('depth')->unsigned()->nullable()->default(0)->comment('地区深度');
            $table->string('name', 50)->nullable()->comment('地区名称');
            $table->string('postal_code', 10)->default('')->comment('邮编');
            $table->integer('sort')->default(100)->comment('地区排序');
            $table->string('area_name', 50)->default('')->comment('省市区排列');
            $table->index(['id', 'parent_id', 'name'], 'id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_area');
    }
}
