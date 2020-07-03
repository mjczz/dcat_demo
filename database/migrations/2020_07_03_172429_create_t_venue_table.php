<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_venue', function (Blueprint $table) {
            $table->integer('venue_id', true);
            $table->char('venue_code', 32)->unique('uq_venue_code');
            $table->string('venue_name', 128);
            $table->tinyInteger('sort_number')->default(0);
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->string('icon');
            $table->string('banner')->nullable()->default('');
            $table->string('intro')->default('');
            $table->text('description')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0：禁用,1:启用');
            $table->binary('mark')->nullable()->comment('备注');
            $table->char('sp_venue_code', 64)->nullable()->comment('提供方会场标识');
            $table->timestamp('create_time')->useCurrent();
            $table->timestamp('update_time')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_venue');
    }
}
