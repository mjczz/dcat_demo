<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTPagesItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_pages_items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('widget_code', 50)->default('')->comment('组件编码');
            $table->string('page_code', 50)->default('')->comment('页面编码');
            $table->unsignedTinyInteger('position_id')->default(1)->comment('布局位置');
            $table->unsignedTinyInteger('sort')->default(1)->comment('排序，越小越靠前');
            $table->text('params')->nullable()->comment('组件配置内容');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_pages_items');
    }
}
