<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFormSubmitDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_form_submit_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('submit_id')->nullable()->default(0)->comment('提交表单id');
            $table->unsignedBigInteger('form_id')->nullable()->default(0)->comment('表单id');
            $table->bigInteger('form_item_id')->nullable()->comment('表单项id');
            $table->string('form_item_name', 200)->nullable()->default('')->comment('表单项名称');
            $table->text('form_item_value')->nullable()->comment('表单项值');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_form_submit_detail');
    }
}
