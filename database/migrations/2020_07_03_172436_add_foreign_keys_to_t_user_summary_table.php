<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTUserSummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('t_user_summary', function (Blueprint $table) {
            $table->foreign('user_id', 'fk_summary_user_id')->references('id')->on('t_user')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('t_user_summary', function (Blueprint $table) {
            $table->dropForeign('fk_summary_user_id');
        });
    }
}
