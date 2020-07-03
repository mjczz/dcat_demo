<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTBillAftersalesImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_bill_aftersales_images', function (Blueprint $table) {
            $table->string('aftersales_id', 20)->index('aftersales_id')->comment('售后单id');
            $table->char('image_id', 32)->comment('图片ID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_bill_aftersales_images');
    }
}
