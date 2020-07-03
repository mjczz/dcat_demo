<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupModifyLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_modify_log', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->char('sup_code', 14)->comment('供应商编码');
            $table->char('modify_field', 32)->comment('变更字段');
            $table->string('org_value')->nullable()->comment('原值');
            $table->string('new_value')->nullable()->comment('新值');
            $table->string('modify_notes')->default('')->comment('变更说明');
            $table->bigInteger('create_time')->comment('变更时间');
            $table->index(['sup_code', 'modify_field'], 'sup_code');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_modify_log');
    }
}
