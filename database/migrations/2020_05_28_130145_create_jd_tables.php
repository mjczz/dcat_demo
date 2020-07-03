<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJdTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 商品分类
        Schema::create('t_jd_cate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cate_id')->default(0)->comment('分类ID');
            $table->integer('parent_id')->default(0)->comment('父类ID');
            $table->string('name', 50)->default('')->comment('分类名称');
            $table->tinyInteger('cat_class')->default(0)->comment('0一级分类 1二级分类 2三级分类');
            $table->tinyInteger('state')->default(0)->comment('1有效 0无效');
        });
        //$sql = "ALTER TABLE `t_jd_cate` COMMENT '京东-商品分类'";
        //\Illuminate\Support\Facades\DB::statement($sql);

        // 商品品牌
        Schema::create('t_jd_brand', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50)->default('')->comment('品牌名称');
        });
        //$sql = "ALTER TABLE `t_jd_brand` COMMENT '京东-商品品牌'";
        //\Illuminate\Support\Facades\DB::statement($sql);

        // 商品池编号
        Schema::create('t_jd_page_num', function (Blueprint $table) {
            $table->string('name', 50)->default('')->comment('商品池名称');
            $table->string('page_num', 50)->default('')->comment('商品池编号');
            $table->text('sku_ids')->comment('skuId集合');
        });
        //$sql = "ALTER TABLE `t_jd_page_num` COMMENT '京东-商品池编号'";
        //\Illuminate\Support\Facades\DB::statement($sql);

        // 商品详情
        Schema::create('t_jd_goods_info', function (Blueprint $table) {
            $table->integer('page_num')->default(0)->comment('商品池编号');
            $table->decimal('price', 10, 2)->default(0)->comment('京东销售价');
            $table->decimal('jd_price', 10, 2)->default(0)->comment('京东价，仅供参考');
            $flowid = '9621dec417644950894da4a848bcb128';
            $table->string('name', 200)->default('')->comment('商品名称');
            $table->string('sku', 200)->default('')->comment('商品编号');
            $table->string('sale_unit', 50)->default('')->comment('售卖单位');
            $table->string('weight', 50)->default('')->comment('重量');
            $table->string('product_area', 200)->default('')->comment('产地');
            $table->string('ware_qd', 200)->default('')->comment('包装清单');
            $table->string('image_path', 200)->default('')->comment('主图');
            $table->text('param')->comment('规格参数');
            $table->tinyInteger('state')->default(0)->comment('状态');
            $table->string('brand_name', 200)->default('')->comment('品牌名称');
            $table->string('upc', 200)->default('')->comment('UPC码');
            $table->string('category', 100)->default('')->comment('分类 示例"670;729;4837');
            $table->integer('cate1_id')->default(0)->comment('一级分类id');
            $table->integer('cate2_id')->default(0)->comment('二级分类id');
            $table->integer('cate3_id')->default(0)->comment('三级分类id');
            $table->text('introduction')->comment('商品详情页大字段');

            $table->tinyInteger('price_sync_status')->default(0)->comment('状态');

        });
        //$sql = "ALTER TABLE `t_jd_goods_info` COMMENT '京东-商品详情'";
        //\Illuminate\Support\Facades\DB::statement($sql);

        // 商品图片
        Schema::create('t_jd_goods_image', function (Blueprint $table) {
            $table->string('sku_id', 200)->default('')->comment('商品编号');
            $table->string('url', 200)->default('')->comment('图片路径完整url');
            $table->string('path', 200)->default('')->comment('图片路径');
            $table->string('created', 100)->default('')->comment('创建日期');
            $table->string('modified', 100)->default('')->comment('更新时间');
            $table->tinyInteger('yn')->default(0)->comment('0不可用 1可用');
            $table->tinyInteger('is_primary')->default(0)->comment('是否主图 1是 0否');
            $table->tinyInteger('order_sort')->default(0)->comment('排序');
            $table->tinyInteger('position')->default(0)->comment('位置');
            $table->tinyInteger('type')->default(0)->comment('类型（0方图  1长图【服装】）');
            $table->text('features')->comment('特征');
        });
        //$sql = "ALTER TABLE `t_jd_goods_image` COMMENT '京东-商品图片'";
        //\Illuminate\Support\Facades\DB::statement($sql);


        // 京东推送消息
        Schema::create('t_jd_message', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->default(0)->comment('消息类型');
            $table->string('msg_id', 50)->default(0)->comment("推送id");
            $table->text('msg_body')->comment('消息体');
            $table->string('msg_time', 20)->default('')->comment('time');
            $table->integer('msg_time_int')->default(0)->comment('msg_time的时间戳格式');
            $table->tinyInteger('msg_status')->default(1)->comment('1未处理 2已处理 3暂不处理');
            $table->string('jd_order_id', 50)->default(0)->comment("京东订单id");
            $table->string('sku_id', 50)->default(0)->comment("京东sku_id");
        });
        //$sql = "ALTER TABLE `t_jd_message` COMMENT '京东-推送消息'";
        //\Illuminate\Support\Facades\DB::statement($sql);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_jd_cate');
        Schema::dropIfExists('t_jd_brand');
        Schema::dropIfExists('t_jd_page_num');
        Schema::dropIfExists('t_jd_goods_info');
        Schema::dropIfExists('t_jd_goods_image');
        Schema::dropIfExists('t_jd_message');
    }
}
