<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 200)->nullable()->comment('文章标题');
            $table->char('cover', 32)->nullable()->comment('文章封面图');
            $table->longText('content')->nullable()->comment('文章内容');
            $table->unsignedInteger('type_id')->nullable()->comment('文章分类id');
            $table->unsignedBigInteger('ctime')->nullable()->comment('文章创建时间');
            $table->unsignedBigInteger('utime')->nullable()->comment('修改时间');
            $table->unsignedSmallInteger('sort')->nullable()->default(100)->comment('文章排序  从小到大');
            $table->unsignedSmallInteger('is_pub')->nullable()->comment('1 发布  2 不发布');
            $table->unsignedBigInteger('isdel')->nullable()->index('isdel')->comment('软删除位置  有时间代表删除');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_article');
    }
}
