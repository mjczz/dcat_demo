<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBusinessTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_business_tag', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->unsignedInteger('tag_id')->unique('uk_tag_id')->comment('标签ID');
            $table->string('tag_name', 64)->comment('标签名');
            $table->integer('sort_number')->default(0)->comment('排序');
            $table->timestamp('create_time')->useCurrent()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_business_tag');
    }
}
