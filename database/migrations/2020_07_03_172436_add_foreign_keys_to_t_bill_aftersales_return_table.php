<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTBillAftersalesReturnTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_bill_aftersales_return', function (Blueprint $table) {
            $table->foreign('aftersales_id', 'fk_aftersales_id')->references('aftersales_id')->on('t_bill_aftersales')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_bill_aftersales_return', function (Blueprint $table) {
            $table->dropForeign('fk_aftersales_id');
        });
    }
}
