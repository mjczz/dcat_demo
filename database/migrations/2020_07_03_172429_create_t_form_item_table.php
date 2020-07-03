<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFormItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_form_item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 50)->nullable()->comment('字段名称');
            $table->string('type', 30)->nullable()->comment('字段类型');
            $table->string('validation_type', 30)->nullable()->comment('验证类型');
            $table->string('value')->nullable()->comment('表单值');
            $table->string('default_value')->nullable()->comment('默认值');
            $table->unsignedBigInteger('form_id')->nullable()->default(0)->comment('表单id');
            $table->boolean('required')->unsigned()->nullable()->default(2)->comment('是否必填，1必填，2不必填');
            $table->unsignedInteger('sort')->nullable()->default(100)->comment('排序');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_form_item');
    }
}
