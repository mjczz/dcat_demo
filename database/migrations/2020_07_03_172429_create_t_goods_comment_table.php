<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGoodsCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_goods_comment', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('comment_id')->nullable()->default(0)->comment('父级评价ID');
            $table->boolean('score')->nullable()->default(5)->comment('评价1-5星');
            $table->unsignedInteger('user_id')->index('user_id')->comment('评价用户ID');
            $table->unsignedInteger('goods_id')->nullable()->index('goods_id')->comment('商品ID 关联goods.id');
            $table->unsignedBigInteger('order_id')->comment('评价订单ID');
            $table->text('addon')->nullable()->comment('货品规格序列号存储');
            $table->string('images', 200)->nullable()->comment('评价图片逗号分隔最多五张');
            $table->text('content')->nullable()->comment('评价内容');
            $table->text('seller_content')->nullable()->comment('商家回复');
            $table->unsignedTinyInteger('display')->nullable()->default(1)->index('display')->comment('是否显示 1显示 2不显示');
            $table->unsignedBigInteger('ctime')->nullable()->comment('创建时间');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_goods_comment');
    }
}
