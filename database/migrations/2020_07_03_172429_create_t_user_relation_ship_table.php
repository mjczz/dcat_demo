<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserRelationShipTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user_relation_ship', function (Blueprint $table) {
            $table->integer('id', true)->comment('自增id');
            $table->integer('user_id')->default(0)->comment('用户id');
            $table->integer('relation_id')->default(0)->comment('关联用户id');
            $table->unsignedTinyInteger('type')->default(1)->comment('关系类型：1=服务商与商户推荐关系，2=服务商与业务员雇佣关系，3=业务员与商户推荐关系，4=商家与会员锁定关系，5=会员与会员推荐关系');
            $table->unsignedBigInteger('ctime')->nullable()->comment('产生关联时间');
            $table->bigInteger('utime')->nullable()->comment('更新时间');
            $table->unsignedBigInteger('isdel')->nullable()->comment('删除标志 有数据就是删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user_relation_ship');
    }
}
