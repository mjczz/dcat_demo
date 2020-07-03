<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTShopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_shop', function (Blueprint $table) {
            $table->increments('id')->comment('自增店铺ID');
            $table->unsignedInteger('user_id')->comment('用户id');
            $table->integer('sort')->nullable()->comment('排序');
            $table->string('name', 35)->nullable()->comment('店铺名称');
            $table->string('sign', 600)->nullable()->comment('店招url');
            $table->unsignedBigInteger('open_time')->nullable()->comment('开店时间');
            $table->boolean('marketable')->unsigned()->nullable()->default(1)->comment('上架标志 1=上架 2=下架');
            $table->unsignedTinyInteger('status')->nullable()->default(1)->comment('审核状态1,审核中，2审核通过，3,审核失败');
            $table->string('reason')->nullable()->comment('审核下架理由');
            $table->unsignedInteger('cat_id')->nullable()->comment('主营类目id');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('更新时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_shop');
    }
}
