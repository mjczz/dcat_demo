<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupVerifyLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sup_verify_log', function (Blueprint $table) {
            $table->increments('id')->comment('自增ID');
            $table->char('sup_code', 14)->index('sup_code')->comment('供应商编码');
            $table->unsignedTinyInteger('verify_result')->comment('审核结果(sup_supplier.is_verify)');
            $table->string('verify_notes')->default('')->comment('审核说明');
            $table->unsignedInteger('verify_manage_id')->comment('审核人(t_manage.id)');
            $table->unsignedBigInteger('create_time')->comment('审核时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sup_verify_log');
    }
}
